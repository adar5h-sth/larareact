<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddColorRequest;
use App\Http\Requests\UpdateColorRequest;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::latest()->get();
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     * Shows a form to add a color
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Uses Form Request AddColorRequest for validation
     * Inserts into DB
     * Redirects back with success message
     */
    public function store(AddColorRequest $request)
    {
        Color::create($request->validated());

        return redirect()
            ->route('admin.colors.index')
            ->with('success', 'Color has been added successfully');
    }

    /**
     * Not using the show page
     */
    public function show(Color $color)
    {
        abort(404);
    }

    /**
     * Shows an edit form
     * Automatically loads the color using route model binding
     */
    public function edit(Color $color)
    {
        return view('admin.colors.edit')->with([
            'color' => $color
        ]);
    }

    /**
     * Validates update request
     * Updates only validated fields
     * Redirects with success 
     */
    public function update(UpdateColorRequest $request, Color $color)
    {
        $color->update($request->validated());

        return redirect()->route('admin.colors.index')
            ->with('success', 'Color updated successfully');
    }

    /**
     * Deletes the color
     * Redirects back with message
     */
    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route('admin.colors.index')->with([
            'success' => 'Color has been deleted successfully'
        ]);
    }
}
