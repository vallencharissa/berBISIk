<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tambahJadwalAcaraRequest extends FormRequest
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
        $rules = [];
        $numberOfFields = 12;  

        
    
        for ($i = 1; $i <= request()->query('jumlahSesi'); $i++) {
            $rules["name$i"] = 'required';
            $rules["description$i"] = 'required';
            $rules["date$i"] = 'required';
            $rules["time_start$i"] = 'required';
            $rules["time_end$i"] = "required|after:time_start$i";
        }
        
        return $rules;
        
        // return [
        //     'name' => 'required'
        // ];
    }

    public function messages()
    {
        $messages = [];
        $numberOfFields = 12; 

        for ($i = 1; $i <= request()->query('jumlahSesi'); $i++) {
            $messages["name$i.required"] = "Nama sesi $i wajib diisi.";
            $messages["description$i.required"] = "Deskripsi sesi $i wajib diisi.";
            $messages["date$i.required"] = "Tanggal sesi $i wajib diisi.";
            $messages["time_start$i.required"] = "Waktu mulai sesi $i wajib diisi.";
            $messages["time_end$i.required"] = "Waktu selesai sesi $i wajib diisi.";
            $messages["time_end$i.after"] = "Waktu selesai sesi $i harus setelah waktu mulai sesi $i.";
        }
        
        return $messages;

        // return [
        //     'name.required' => 'wajib diisi'
        // ];
        
    }
}
