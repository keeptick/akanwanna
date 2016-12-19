<?php

use Illuminate\Database\Seeder;

class positionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = [
            ['position'=>'President','department_id'=>'1'],
            ['position'=>'Deputy President','department_id'=>'1'],
            ['position'=>'Vice President','department_id'=>'1'],
            ['position'=>'Secretary General','department_id'=>'1'],
            ['position'=>'Asst. Secretary General','department_id'=>'1'],
            ['position'=>'Treasurer','department_id'=>'1'],
            ['position'=>'Financial Secretary','department_id'=>'1'],
            ['position'=>'Asst. Financial Secretary','department_id'=>'1'],
            ['position'=>'Director Information & Communication','department_id'=>'1'],
            ['position'=>'Asst. Information & communication','department_id'=>'1'],
            ['position'=>'Secretary, Information & communication','department_id'=>'1'],
            ['position'=>'Director, Music & Socials','department_id'=>'1'],
            ['position'=>'Asst. Director, Music & Socials','department_id'=>'1'],
            ['position'=>'Provost','department_id'=>'1'],
            ['position'=>'National Auditor','department_id'=>'1'],
            ['position'=>'Legal Adviser','department_id'=>'1'],
            ['position'=>'Leader, Youth Wing','department_id'=>'2'],
            ['position'=>'Asst. Leader Youth Wing','department_id'=>'2'],
            ['position'=>'2nd Asst. Leader Youth Wing','department_id'=>'2'],
            ['position'=>'Leader Women’s Wing','department_id'=>'3'],
            ['position'=>'Asst. leader','department_id'=>'3'],
            ['position'=>'Secretary','department_id'=>'3'],
            ['position'=>'Financial Sec.','department_id'=>'3'],
            ['position'=>'PRO','department_id'=>'3'],
            ['position'=>'Project officer','department_id'=>'3'],
            ['position'=>'2nd Asst. Leader','department_id'=>'3'],
            ['position'=>'Strategic Planning /Int’l Affiliations /Multi-lateral collaborations','department_id'=>'4'],
            ['position'=>'Welfare/ Economic Dev./ Co-operative Society','department_id'=>'4'],
            ['position'=>'Evangelism / Man power Dev. /Education','department_id'=>'4'],
            ['position'=>'Other','department_id'=>'5'],
        ];
        DB::table('positions')->insert($position);
    }
}
