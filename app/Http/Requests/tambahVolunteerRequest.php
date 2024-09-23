<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tambahVolunteerRequest extends FormRequest
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
            
            'title' => 'required', 
            'short_description' => 'required',
            'benefit' => 'required',
            'criteria' => 'required',
            'seat' => 'required',
            'location' => 'required',
            // 'photo_file_name' => 'required',
            'whatsapp_link' => 'required',
            'zoom_link' => 'required',
            'name' => 'required',
            'date' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul acara relawan wajib diisi.',
            'short_description.required' => 'Deskripsi singkat wajib diisi.',
            'benefit.required' => 'Keuntungan wajib diisi.',
            'seat.required' => 'Jumlah peserta wajib diisi.',
            'location.required' => 'Lokasi wajib diisi.',
            'photo.required' => 'Photo wajib diisi.',
            'whatsapp_link' => 'Link whatsapp wajib diisi.',
            'zoom_link' => 'Link zoom wajib diisi.',
            'name.required' => 'Nama jadwal wajib diisi.',
            'date.requied' => 'Tanggal wajib diisi.',
            'time_start.required' => 'Waktu mulai wajib diisi.',
            'time_end.required' => 'Waktu selesai wajib diisi' 

        ];
    }
}
