<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentSetting;

class CryptocurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cryptos = [
            ['name' => 'Bitcoin', 'image' => 'bitcoin.png', 'address' => '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa'],
            ['name' => 'Ethereum', 'image' => 'ethereum.png', 'address' => '0x32Be343B94f860124dC4fEe278FDCBD38C102D88'],
            ['name' => 'Litecoin', 'image' => 'litecoin.png', 'address' => 'LgGeT7a9TxXE9HgFPw9zBxGiqmrSCfT'],
            ['name' => 'Ripple', 'image' => 'ripple.png', 'address' => 'rUocf1ixKzTuEe34kmVhRvGqNCofY1NJzV'],
            ['name' => 'Tether (USDT)', 'image' => 'tether.png', 'address' => 'TVgXTd8tdzz1TpPdxq1w8xhXKj7tNTJ8gE'],
            ['name' => 'Binance Coin', 'image' => 'binancecoin.png', 'address' => 'bnb1w34k53fysjlkhk88s9xz4rdm35g3gr4wdeh87p'],
            ['name' => 'Cardano', 'image' => 'cardano.png', 'address' => 'addr1qxx3wxwpuq9pxf6jw5rjyy7y2f4qvz8uz6gv3y9kz3k7qfq2lhj3rzx5vskn3ux'],
            ['name' => 'Dogecoin', 'image' => 'dogecoin.png', 'address' => 'DH5yaieqoZN36fDVciNyRueRGvGLR3mr7L'],
            ['name' => 'Polkadot', 'image' => 'polkadot.png', 'address' => '14vhf5zhL5TV7nB9Exv4a82ssXwJQdf5bhDQLu3DJKu2zG4G'],
            ['name' => 'Solana', 'image' => 'solana.png', 'address' => '2hA6hdSjPZNXQ15VbNxk92BdZrdVNSfxFbZs8uex1ojA'],
        ];

        foreach ($cryptos as $crypto) {
            PaymentSetting::create($crypto);
        }
    }
}
