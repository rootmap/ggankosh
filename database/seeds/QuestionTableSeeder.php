<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert([
            [
                'story_id' => 1,
                'question' => "কোন নবাব এর সময়ে পলাশীর যুদ্ধ হয়েছিল?",
                'option1' => "নবাব সিরাজ-উদ-দৌলা",
                'option2' => "নবাব আলীবর্দী খান",
                'option3' => "সম্রাট শাহ জাহান",
                'option4' => "সম্রাট আকবর",
                'answer' => "নবাব সিরাজ-উদ-দৌলা",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 1,
                'question' => "নবাব সিরাজ-উদ-দৌলা কত বছর বয়সে বাংলার নবাবের ক্ষমতা অর্জন করেন?",
                'option1' => "২৯ বছর বয়সে",
                'option2' => "২২ বছর বয়সে",
                'option3' => "১৫ বছর বয়সে",
                'option4' => "৩৫ বছর বয়সে",
                'answer' => "২২ বছর বয়সে",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 1,
                'question' => "নবাব সিরাজ-উদ-দৌলা কার বিশ্বাসঘাতকতার কারনে ২৩ জুন ১৭৫৭ সালে পলাশীর যুদ্ধে পরাজিত হন?",
                'option1' => "সেনাপতি মীরজাফর",
                'option2' => "বন্ধু জসিম",
                'option3' => "ভাই কাসেম",
                'option4' => "মন্ত্রী রাহিম",
                'answer' => "সেনাপতি মীরজাফর",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 5,
                'question' => "ঈগল কার বাচ্চা নিয়ে গেল?",
                'option1' => "শেয়ালছানা",
                'option2' => "খরগোস ছানা",
                'option3' => "মুরগি ছানা",
                'option4' => "মাছ",
                'answer' => "শেয়ালছানা",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 5,
                'question' => "ঈগল এর বাসা কোথায় ছিল?",
                'option1' => "উঁচু পাইন গাছে",
                'option2' => "উঁচু কাঁঠাল গাছে",
                'option3' => "উঁচু আম গাছে",
                'option4' => "উঁচু লিচু গাছে",
                'answer' => "উঁচু পাইন গাছে",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 5,
                'question' => "শেয়াল মা মাঠে লোকের কাছ থেকে কি বয়ে আনল?",
                'option1' => "পানি",
                'option2' => "আগুন",
                'option3' => "কোদাল",
                'option4' => "লাঠি",
                'answer' => "আগুন",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 2,
                'question' => "তামিম ইকবাল খান এর জন্ম কত সালে?",
                'option1' => "১৯৮৯",
                'option2' => "১৯৯৫",
                'option3' => "১৯৮৭",
                'option4' => "১৯৮৫",
                'answer' => "১৯৮৯",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 2,
                'question' => "তামিম এর ভাইয়ের নাম কী?",
                'option1' => "আকরাম",
                'option2' => "বাশার",
                'option3' => "কোদাল",
                'option4' => "নাফিস",
                'answer' => "বুলবুল",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 2,
                'question' => "তামিম একদিনের আন্তর্জাতিকে ৬০০০ রান সংগ্রহ করেন কত সালে?",
                'option1' => "২০১২",
                'option2' => "২০১৫",
                'option3' => "২০১৬",
                'option4' => "২০১৮",
                'answer' => "২০১৮",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'story_id' => 2,
                'question' => "২০১২ সালের মার্চে তামিম আইপিএলের কোন ক্রিকেট দলের সাথে যোগ দেন?",
                'option1' => "কলকাতা",
                'option2' => "পাঞ্জাব",
                'option3' => "পুনে",
                'option4' => "লাঠি",
                'answer' => "দিল্লী",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
