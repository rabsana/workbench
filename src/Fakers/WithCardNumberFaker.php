<?php

namespace Rabsana\Workbench\Fakers;

trait WithCardNumberFaker
{
    public function fakeCardNumber(){
        $prefixes = [
            '502229', '610433', '621986', '636214', '502938',
            '603799', '589210', '627961', '603770', '628023',
            '627648', '502908', '627760', '627412', '622106',
            '627488', '639346', '502806', '603769', '627353',
            '589463', '636949',  '505785', '639599', '627381',
            '639607', '606373'
        ];

        $part1 = $prefixes[array_rand($prefixes)];
        $part2 = rand(1111, 9999);
        $part3 = rand(1111, 9999);
        $part4 = rand(11, 99);

        return $part1.$part2.$part3.$part4;
    }
}
