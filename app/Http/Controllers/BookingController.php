<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Space;
use Illuminate\Http\Request;

/**
 * Class BookingController
 * @package App\Http\Controllers
 */
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Reservas de mis espacios
        $myspacesbookings = Booking::query()
            ->addSelect([
                'user_id_owner' => Space::select('user_id')
                    ->whereColumn('spaces.id', 'bookings.space_id')
                    ->take(1)
            ])
            ->paginate();
        $myspacesbookings = $myspacesbookings->where('user_id_owner', auth()->user()->id);


        //Mis reservas
        $bookings = Booking::where('user_id', auth()->user()->id)->paginate();

        return view('booking.index', compact('bookings', 'myspacesbookings'))
            ->with('i', (request()->input('page', 1) - 1) * $bookings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = new Booking();
        return view('booking.create', compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Booking::$rules);

        $space_id = $request->space_id;

        // Se guarda en $bookings todas las reservas del espacio solicitado
        $bookings = Booking::All()->where('space_id', '=', $space_id);

        // Se comprueba si hay alguna reserva existente en la franja horaria solicitada, si se encuentra alguna coincidencia, se devuelve error
        foreach ($bookings as $book) {
            if (!($request->end <= $book->start or $request->start >= $book->end)) {
                return redirect()->route('bookings.index')
                    ->with('success', 'Sala ocupada.');
            };
        }

        // Si no hay coincidencias, se realiza reserva de sala
        $booking = Booking::create($request->all());
        return redirect()->route('bookings.index')
            ->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);

        return view('booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        request()->validate(Booking::$rules);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        echo Space::find($booking->space_id)->user_id;
        //Se verifica si el usuario es propietario del espacio o de la reserva
        if ($booking->user_id == auth()->id() || Space::find($booking->space_id)->user_id == auth()->id()) {
            $booking = Booking::find($id)->delete();
            return redirect()->route('spaces.index')
                ->with('success', 'Espacio eliminado con éxito.');
        } else {
            return redirect()->route('spaces.index')
                ->with('failure', 'No eres propietario de la reserva.');
        }

    }

    public function booking($id)
    {
        $booking = Booking::find($id);

        return view('booking.booking', compact('booking'));
    }
    
}
