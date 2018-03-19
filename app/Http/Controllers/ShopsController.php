<?php

namespace App\Http\Controllers;

use Auth;
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;

class ShopsController extends Controller
{
    /**
     * Подключение класса посредника
     * 
     * @return
     */
    public function __construct()
    {
        $this->middleware('shops', ['except' => ['index', 'show']]);
    }
    
    /**
     * Просмотр каталога товаров
     * 
     * @return
     */
    public function index()
    {
        $shops = Shop::latest('id')->get();
        return view('shops.index', compact('shops'));
    }
    
    /**
     * Просмотр выбранного товара
     * 
     * @param $id
     * 
     * @return
     */
    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.show', compact('shop'));
    }
    
    /**
     * Удаление выбранного товара
     * 
     * @param $id
     * 
     * @return
     */
    public function destroy($id)
    {
        Shop::destroy($id);
        return redirect('shops');
    }
    
    /**
     * Отображение формы добавления товара
     * 
     * @return
     */
    public function create()
    {
        return view('shops.create');
    }
    
    /**
     * Запись формы в БД с привязкой к ID юзера
     * 
     * @param $request
     * 
     * @return
     */
    public function store(ShopRequest $request)
    {
        $shop = new Shop($request->all());
        Auth::user()->shops()->save($shop);
        return redirect('shops');
    }
    
    /**
     * Отображение формы для редактирования
     * 
     * @param $id
     * 
     * @return
     */
    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.edit', compact('shop'));
    }
    
    /**
     * Обновление данных формы в БД
     * 
     * @param $id
     * @param $request
     * 
     * @return
     */
    public function update($id, ShopRequest $request)
    {
        $shop = Shop::findOrFail($id);
        $shop->update($request->all());
        return redirect('shops');
    }
}
