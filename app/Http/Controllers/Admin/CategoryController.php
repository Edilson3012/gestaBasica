<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateCategoryFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCategoryFormRequest $request)
    {

        DB::table('categories')->insert([
            'tx_title' => $request->tx_title,
            'tx_url' => $request->tx_url,
            'tx_description' => $request->tx_description
        ]);

        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = DB::table('categories')->where('id_category', $id)->first();

        if (!$category)
            return redirect()->back();

        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->where('id_category', $id)->first();

        if (!$category)
            return redirect()->back();

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateCategoryFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCategoryFormRequest $request, $id)
    {
        DB::table('categories')
            ->where('id_category', $id)
            ->update([
                'tx_title' => $request->tx_title,
                'tx_url' => $request->tx_url,
                'tx_description' => $request->tx_description
            ]);

        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('id_category', $id)->delete();

        return redirect()->route('categories');
    }

    public function search(Request $request)
    {

        $data = $request->all();
        // dd($data['tx_title']);
        /*
        $categories = DB::table('categories')
            ->where('tx_title', $search )
            ->orWhere('tx_url', $search)
            ->orWhere('tx_description', 'LIKE', "%{$search}%")
            ->get();
        */

        $categories = DB::table('categories')
            ->where(function ($query) use ($data) {
                if (isset($data['tx_title'])) {
                    $title = $data['tx_title'];
                    $query->where('tx_title', 'LIKE', "%{$title}%");
                }
                if (isset($data['tx_url'])) {
                    $url = $data['tx_url'];
                    $query->orWhere('tx_url', 'LIKE', "%{$url}%");
                }
                if (isset($data['tx_description'])) {
                    $desc = $data['tx_description'];
                    $query->where('tx_description', 'LIKE', "%{$desc}%");
                }
            })
            ->get();
            
        // dd($categories);
        return view('admin.categories.index', compact('categories', 'data'));
    }
}
