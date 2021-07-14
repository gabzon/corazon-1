<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionStoreRequest;
use App\Http\Requests\TransactionUpdateRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transactions = Transaction::all();

        return view('transaction.index', compact('transactions'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('transaction.create');
    }

    /**
     * @param \App\Http\Requests\TransactionStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionStoreRequest $request)
    {
        $transaction = Transaction::create($request->validated());

        $request->session()->flash('transaction.id', $transaction->id);

        return redirect()->route('transaction.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Transaction $transaction)
    {
        return view('transaction.show', compact('transaction'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Transaction $transaction)
    {
        return view('transaction.edit', compact('transaction'));
    }

    /**
     * @param \App\Http\Requests\TransactionUpdateRequest $request
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionUpdateRequest $request, Transaction $transaction)
    {
        $transaction->update($request->validated());

        $request->session()->flash('transaction.id', $transaction->id);

        return redirect()->route('transaction.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Transaction $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transaction.index');
    }
}
