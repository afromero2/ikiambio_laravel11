<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\IkiambioUser;
use Illuminate\Validation\Rule;

class IkiambioUserController extends Controller
{
    // GET
    public function index()
    {
        $users = IkiambioUser::orderByDesc('createdDate')->paginate(15);
        return view('ikiambio_users.index', compact('users'));
    }

    public function create()
    {
        return view('ikiambio_users.create');
    }

    // POST
    public function store(Request $request)
    {
        $data = $request->validate([
            'utplId'        => ['nullable','string','max:255','unique:ikiambio_users,utplId'],
            'firstName'     => ['required','string','max:255'],
            'lastName'      => ['required','string','max:255'],
            'identification'=> ['nullable','string','max:255','unique:ikiambio_users,identification'],
            'username'      => ['required','string','max:255','unique:ikiambio_users,username'],
        ]);

        $user = IkiambioUser::create($data);
        return redirect()->route('ikiambio-users.show',$user)->with('ok','Creado');
    }

    // GET
    public function show(IkiambioUser $ikiambioUser)
    {
        return view('ikiambio_users.show', compact('ikiambioUser'));
    }

    public function edit(IkiambioUser $ikiambioUser)
    {
        return view('ikiambio_users.edit', compact('ikiambioUser'));
    }

    // PUT/PATCH
    public function update(Request $request, IkiambioUser $ikiambioUser)
    {
        $data = $request->validate([
            'utplId'        => ['nullable','string','max:255', Rule::unique('ikiambio_users','utplId')->ignore($ikiambioUser->id)],
            'firstName'     => ['required','string','max:255'],
            'lastName'      => ['required','string','max:255'],
            'identification'=> ['nullable','string','max:255', Rule::unique('ikiambio_users','identification')->ignore($ikiambioUser->id)],
            'username'      => ['required','string','max:255', Rule::unique('ikiambio_users','username')->ignore($ikiambioUser->id)],
        ]);

        $ikiambioUser->update($data);
        return redirect()->route('ikiambio-users.show',$ikiambioUser)->with('ok','Actualizado');
    }

    // DELETE
    public function destroy(IkiambioUser $ikiambioUser)
    {
        $ikiambioUser->delete();
        return redirect()->route('ikiambio-users.index')->with('ok','Eliminado');
    }
}
