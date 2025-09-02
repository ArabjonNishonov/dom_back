<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    protected CategoryService $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    // GET /categories
    public function index()
    {
        return response()->json($this->service->all());
    }

    // GET /categories/{id}
    public function show(int $id)
    {
        $category = $this->service->find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json($category);
    }

    // POST /categories
    public function store(CreateRequest $request)
    {
        $category = $this->service->create($request->validated());

        return response()->json($category, 201);
    }

    // PUT/PATCH /categories/{id}
    public function update(UpdateRequest $request, Category $category)
    {
        $this->service->update($category, $request->validated());

        return response()->json($category);
    }

    // DELETE /categories/{id}
    public function destroy(Category $category)
    {
        $this->service->delete($category);

        return response()->json(['message' => 'Category deleted']);
    }
}
