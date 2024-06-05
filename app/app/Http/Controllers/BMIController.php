<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index()
    {
        return view('user.utama')->with(['dashboard' => true]);
    }
    public function program()
    {
        $articles = [
            [
                'title' => 'Konsumsi Makanan Bergizi',
                'summary' => 'konsumsi makanan yang tidak sehat dapat melemahkan sistem kekebalan',
                'image' => '/image/artikel/artikel1.png',
                'link' => 'https://dinkes.jogjaprov.go.id/berita/detail/gizi-dan-imunitas-pentingkah-konsumsi-makanan-bergizi-seimbang',
            ],
            [
                'title' => 'Pola Hidup Sehat',
                'summary' => 'Pola hidup sehat tidak hanya tentang makan makanan bergizi dan olahraga',
                'image' => '/image/artikel/artikel2.jpeg',
                'link' => 'https://www.manulife.co.id/id/artikel/kenali-pola-hidup-sehat-dan-langkah-langkahnya.html',
            ],
            [
                'title' => 'Makanan Yang Tidak Sehat',
                'summary' => 'Makanan tidak sehat adalah berbagai jenis atau ',
                'image' => '/image/artikel/artikel3.jpg ',
                'link' => 'https://www.halodoc.com/kesehatan/makanan-tidak-sehat',
            ],
            [
                'title' => 'Penyakit Akibat Begadang',
                'summary' => 'Selain membuat tubuh lemas, sering begadang dapat memicu berbagai penyakit',
                'image' => '/image/artikel/artikel4.jpg',
                'link' => 'https://www.klikdokter.com/info-sehat/kesehatan-umum/ini-penyakit-yang-mungkin-timbul-akibat-sering-begadang',
            ],
        ];

        return view('user.program', compact('articles'))->with(['dashboard' => true]);
    }
    public function food(){
        return view('user.food')->with(['dashboard' => true]);
    }
    public function workout(){
        return view('user.workout')->with(['dashboard' => true]);
    }
    public function calculate(Request $request)
    {
        // Validasi input
        $request->validate([
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
        ]);

        $weight = $request->input('weight');
        $height = $request->input('height') / 100; // konversi tinggi ke meter
        $bmi = $weight / ($height * $height);

        // Kategorisasi BMI dan interpretasi
        if ($bmi < 18.5) {
            $category = "Underweight";
            $interpretation = "Tubuh Anda memiliki berat badan kurang dari yang seharusnya, yang dapat mengakibatkan risiko kesehatan tertentu.";
            $advice = "HAL INI TIDAK BAIK UNTUK KESEHATANMU, JANGAN PATAH SEMANGAT, AYO BERUBAH BERSAMA KAMI";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $category = "Normal weight";
            $interpretation = "Berat badan Anda berada dalam kisaran sehat.";
            $advice = "Pertahankan gaya hidup sehat!";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $category = "Overweight";
            $interpretation = "Anda memiliki berat badan lebih dari yang seharusnya, yang dapat meningkatkan risiko beberapa masalah kesehatan.";
            $advice = "Perhatikan pola makan dan aktivitas fisik Anda untuk mencapai berat badan yang lebih sehat.";
        } else {
            $category = "Obese";
            $interpretation = "Tubuh Anda memiliki berat badan yang jauh lebih dari yang seharusnya, yang dapat meningkatkan risiko serius terhadap kesehatan.";
            $advice = "HAL INI TIDAK BAIK UNTUK KESEHATANMU, JANGAN PATAH SEMANGAT, AYO BERUBAH BERSAMA KAMI";
        }

        // Memisahkan teks advice setiap 25 karakter dengan newline
        $advice = wordwrap($advice, 50, "\n", true);

        // Simpan hasil BMI, interpretasi, dan saran ke dalam array untuk ditampilkan di halaman
        $bmiResult = [
            'bmi' => number_format($bmi, 1),
            'category' => $category,
            'interpretation' => $interpretation,
            'advice' => nl2br(e($advice))
        ];

        return view('user.utama')->with('bmiResult', $bmiResult)->with(['dashboard' => true]);
    }
    public function feedback()
    {
        return view('user.feedback')->with(['dashboard' => true]);
    }
   
        
}
