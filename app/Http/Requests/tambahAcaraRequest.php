<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tambahAcaraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required', // cuma boleh huruf
            'short_description' => ['required', function ($attribute, $value, $fail) {
                if (str_word_count($value) < 5) {
                    $fail('Input harus memiliki minimal 5 kata.');
                }
            }], // min 20 (krn desc jdi hrusnya bole anggka dan simbol)
            'benefit' => 'required|min:10', // cma boleh huruf 
            'seat' => 'required|numeric',
            // 'price' => ['required', 'regex:/^Rp\s\d+(,\d{3})*(\.\d{1,2})?$/', 'not_in:Rp'],
            'price' => 'required|numeric',
            'location' => ['required', 'min:5', function ($attribute, $value, $fail) {
                if (strpos($value, 'Jalan') !== 0) {
                    $fail('Harus diawali Jalan.');
                }
            }],
            'photo' => 'required',
            'whatsapp_link' => 'required',
            'zoom_link' => 'required'
        ];
    }

    public function attributes()
    {
        return[

            // 'title' => 'Judul Acara'

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul acara wajib diisi.',
            'short_description.required' => 'Deskripsi singkat wajib diisi.',
            'short_description' => 'Deskripsi singkat minimal terdiri dari 5 kata.',
            'benefit.required' => 'Keuntungan wajib diisi.',
            'benefit' => 'Keuntungan minimal terdiri dari 10 karakter.',
            'seat.required' => 'Jumlah peserta wajib diisi.',
            'seat' => 'Jumlah peserta hanya boleh numerik.',
            'price.required' => 'Biaya wajib diisi.',
            'price.numeric' => 'Biaya hanya boleh terdiri dari angka.',
            'location.required' => 'Lokasi wajib diisi.',
            'location' => 'Lokasi harus diawali dengan "Jalan"',
            'photo.required' => 'Photo wajib diisi.',
            'whatsapp_link' => 'Link whatsapp wajib diisi.',
            'zoom_link' => 'Link zoom wajib diisi.',

        ];
    }
    
}
