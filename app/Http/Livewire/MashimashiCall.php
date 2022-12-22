<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MashimashiCall extends Component
{

    public $ninniku = '';
    public $vegetable = '';

    public $oil = '';

    public function render()
    {
        $result = '';
        $result .= match($this->vegetable) {
            'very-many' => 'ヤサイチョモランマ',
            'so-many' => 'ヤサイマシマシ',
            'many' => 'ヤサイマシ',
            'so-so' => 'ヤサイ普通',
            'few' => 'ヤサイ少なめ',
            'none' => 'ヤサイ無し',
            default => '',
        };

        $result .= ' ' . match($this->ninniku) {
            'very-many' => 'ニンニクチョモランマ',
            'so-many' => 'ニンニクマシマシ',
            'many' => 'ニンニクマシ',
            'so-so' => 'ニンニク普通',
            'few' => 'ニンニク少なめ',
            'none' => 'ニンニク無し',
            default => '',
        };

        $result .= ' ' . match($this->oil) {
            'many' => 'アブラマシ',
            'so-so' => 'アブラ普通',
            'few' => 'アブラ少なめ',
            'none' => 'アブラ無し',
            default => '',
        };

        return view('livewire.ninniku',
            ['result' => $result]);
    }
}
