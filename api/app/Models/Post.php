<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function detail_explain()
    {
        switch (true) {
            case $this->detail_explain === null:
                return "未選択";
            case $this->detail_explain == 0:
                return "説明会希望";
            case $this->detail_explain == 1:
                return "デモ希望";
            case $this->detail_explain == 2:
                return "製品について詳しく聞きたい";
        }
    }

    public function document_send()
    {
        switch (true) {
            case $this->document_send === null:
                return "未選択";
            case $this->document_send == 0:
                return "いいえ";
            case $this->document_send == 1:
                return "希望する";
        }
    }

    public function notification()
    {
        return  $this->notification == 1 ? "はい" : "いいえ";
    }
    public function address_type()
    {
        switch (true) {
            case $this->address_type == 1:
                return "ご施設";
            case $this->address_type == 2:
                return "ご自宅";
        }
    }

    public function jobLabel()
    {
        $jobs = [
            "1" => "看護師",
            "2" => "皮膚排泄ケア認定看護師",
            "3" => "医師",
            "4" => "薬剤師",
            "5" => "栄養士",
            "6" => "学生",
            "7" => "その他",
        ];
        return $jobs[$this->job];
    }
}
