<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'nama_perusahaan', 'value' => 'CV Sahabat Eksplorasi Banua'],
            ['key' => 'telepon_1', 'value' => '+62 511 5926485'],
            ['key' => 'telepon_2', 'value' => '+62 852 4851 2861'],
            ['key' => 'telepon_3', 'value' => '+62 813 2121 7662'],
            ['key' => 'email', 'value' => 'sahabateksplorasibanua@gmail.com'],
            ['key' => 'alamat', 'value' => "Jl. Pandawa No.107 RT.03 RW.05\nKel. Guntung Paikat Kec. Banjarbaru Selatan\nKota Banjarbaru – Kalimantan Selatan\n70713"],
            ['key' => 'jam_operasional', 'value' => "Senin - Jumat\n09.00 - 17.00 WITA"],
            ['key' => 'whatsapp', 'value' => '6285248512861'],

            ['key' => 'meta_title', 'value' => 'CV Sahabat Eksplorasi Banua | Jasa Konsultan Pertambangan & Lingkungan'],
            ['key' => 'meta_description', 'value' => 'Perusahaan jasa penunjang pertambangan yang menyediakan layanan eksplorasi, kajian teknis, studi kelayakan, survey lapangan, dan pengelolaan lingkungan di Kalimantan Selatan.'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}