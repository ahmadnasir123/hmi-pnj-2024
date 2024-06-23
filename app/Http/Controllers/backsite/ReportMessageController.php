<?php

namespace App\Http\Controllers\Backsite;

use Illuminate\Http\Request;
use App\Models\Operational\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ReportMessageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('message_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $type_user_condition = Auth::user()->detail_user->type_user_id;

        if ($type_user_condition == 1) {
            // for admin
            $message = Message::orderBy('created_at', 'desc')->get();
        } else {
            // other admin for doctor & patient ( task for everyone here )
            $message = Message::orderBy('created_at', 'desc')->get();
        }

        return view('pages.backsite.operational.message.index', compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'pesan' => 'required',
        ]);

        // Create the message
        $message = Message::create($validated);

        return redirect()->route('backsite.message.index')->with('success', 'Message created successfully and email sent.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        abort_if(Gate::denies('message_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $message->delete();

        alert()->success('Success Message', 'Successfully deleted message');
        return back();
    }
}
