<?php

namespace App\Livewire;

use App\Models\User;
use AWS\CRT\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateRetrospective extends Component
{
    public $nameFamily = 'Teste link';
    public $email = 'teste@teste.com';
    public $description = 'Um ano repleto de amor, risos e memórias inesquecíveis.';
    public $urlYoutube = '';
    public $planType = 'basic';
    public $createVideo = false;

    public $successMessage = '';

    public function save()
    {

        $validate = $this->validate([
            'nameFamily' => 'required|min:3|max:100',
            'email' => 'required|email|max:150',
            'description' => 'required|min:10|max:2000',
            'urlYoutube' => 'nullable|url|max:255',
            'planType' => 'required|in:basic,premium',
            'createVideo' => 'boolean',
        ],[
            'nameFamily.required' => 'O nome da familia é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Informe um e-mail válido.',
            'description.required' => 'A mensagem é obrigatória.',
            'urlYoutube.url' => 'O link do YouTube deve ser válido.',
        ]);

//      tabela de log de criação de retrospectiva
//        dd($validate);

        DB::beginTransaction();

        try {
            $user = User::query()->where('email', $this->email)->first();

            if (!$user) {

                $nameUser = explode('@', $this->email)[0];

                $user = User::query()->create([
                    'name' => $nameUser,
                    'email' => $this->email,
                    'password' => bcrypt(Str::random(12)),
                ]);






            }
        } catch (\Throwable $th) {
            dd($th);
        }

        $this->reset(['nameFamily', 'email', 'description', 'urlYoutube', 'createVideo', 'planType']);
        $this->successMessage = '🎉 Sua retrospectiva foi criada com sucesso!';
    }


    public function render()
    {
        return view('livewire.create-retrospective');
    }
}
