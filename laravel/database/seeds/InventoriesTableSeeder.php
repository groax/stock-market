<?php

use Illuminate\Database\Seeder;
use App\Inventory;
use App\Stock;
use App\User;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->delete();

        $user = User::where('name', 'Ugnius')->first();

        $stock = Stock::where('symbol', 'aapl')->first();
        $inventory = new Inventory();
        $inventory->stock()->associate($stock);
        $inventory->user()->associate($user);
        $inventory->quantity = 5;
        $inventory->save();

        $stock = Stock::where('symbol', 'msft')->first();
        $inventory = new Inventory();
        $inventory->stock()->associate($stock);
        $inventory->user()->associate($user);
        $inventory->quantity = 10;
        $inventory->save();

        $user = User::where('name', 'Test')->first();

        $stock = Stock::where('symbol', 'aapl')->first();
        $inventory = new Inventory();
        $inventory->stock()->associate($stock);
        $inventory->user()->associate($user);
        $inventory->quantity = 13;
        $inventory->save();

        $stock = Stock::where('symbol', 'msft')->first();
        $inventory = new Inventory();
        $inventory->stock()->associate($stock);
        $inventory->user()->associate($user);
        $inventory->quantity = 4;
        $inventory->save();
    }
}
