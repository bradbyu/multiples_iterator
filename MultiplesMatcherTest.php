<?php

namespace Classes;

use PHPUnit\Framework\TestCase;

/**
 * Class MultiplesMatcherTest
 */
class MultiplesMatcherTest extends TestCase
{
    /**
     * @var MultiplesMatcher
     */
    protected $sut;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        $this->sut = new MultiplesMatcher();
    }

    /**
     * @test
     * @return void
     */
    public function baseRequirementsAreMet()
    {
        $expected = [
            '1',
            '2',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'3',
            '4',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'5',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'6',
            '7',
            '8',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'9',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'10',
            '11',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'12',
            '13',
            '14',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'15',
            '16',
            '17',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'18',
            '19',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'20',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'21',
            '22',
            '23',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'24',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'25',
            '26',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'27',
            '28',
            '29',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'30',
            '31',
            '32',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'33',
            '34',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'35',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'36',
            '37',
            '38',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'39',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'40',
            '41',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'42',
            '43',
            '44',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'45',
            '46',
            '47',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'48',
            '49',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'50',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'51',
            '52',
            '53',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'54',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'55',
            '56',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'57',
            '58',
            '59',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'60',
            '61',
            '62',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'63',
            '64',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'65',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'66',
            '67',
            '68',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'69',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'70',
            '71',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'72',
            '73',
            '74',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'75',
            '76',
            '77',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'78',
            '79',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'80',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'81',
            '82',
            '83',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'84',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'85',
            '86',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'87',
            '88',
            '89',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'90',
            '91',
            '92',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'93',
            '94',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'95',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'96',
            '97',
            '98',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'99',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'100',
        ];

        $this->assertEquals($expected, $this->sut->multiplesIterator());
    }

    /**
     * @test
     * @return void
     */
    public function customRequirementsAreMet()
    {
        $expected = [
            '15',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'16',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'17',
            '18',
            '19',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'20',
            '21',
            '22',
            '23',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'24',
            '25',
            '26',
            '27',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'28',
            '29',
            '30',
            '31',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'32',
            '33',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'34',
            '35',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'36',
            '37',
            '38',
            '39',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'40',
            '41',
            '42',
            '43',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'44',
            '45',
            '46',
            '47',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'48',
            '49',
            '50',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'51',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'52',
            '53',
            '54',
            '55',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'56',
            '57',
            '58',
            '59',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'60',
            '61',
            '62',
            '63',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'64',
            '65',
            '66',
            '67',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'68',
            '69',
            '70',
            '71',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'72',
            '73',
            '74',
            '75',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'76',
            '77',
            '78',
            '79',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'80',
            '81',
            '82',
            '83',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'84',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'85',
            '86',
            '87',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'88',
            '89',
            '90',
            '91',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'92',
            '93',
            '94',
            '95',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'96',
            '97',
            '98',
            '99',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'100',
            '101',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'102',
            '103',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'104',
            '105',
            '106',
            '107',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'108',
            '109',
            '110',
            '111',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'112',
            '113',
            '114',
            '115',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'116',
            '117',
            '118',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'119',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'120',
            '121',
            '122',
            '123',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'124',
            '125',
            '126',
            '127',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'128',
            '129',
            '130',
            '131',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'132',
            '133',
            '134',
            '135',
            MultiplesMatcher::OUTPUT_FIRST_AND_SECOND_MULTIPLE,//'136',
            '137',
            '138',
            '139',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'140',
            '141',
            '142',
            '143',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'144',
            '145',
            '146',
            '147',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'148',
            '149',
            '150',
            '151',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'152',
            MultiplesMatcher::OUTPUT_SECOND_MULTIPLE,//'153',
            '154',
            '155',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'156',
            '157',
            '158',
            '159',
            MultiplesMatcher::OUTPUT_FIRST_MULTIPLE,//'160',
            '161',
        ];

        $this->assertEquals($expected, $this->sut->multiplesIterator(4, 17, 15, 161));
    }

    /**
     * @test
     * @return void
     */
    public function arrayValuesRendererWithoutNestedArrays()
    {
        $this->expectOutputString(
<<<EOT
1
2
Sweet
4
Water
Sweet
7
8
Sweet
Water
11
Sweet
13
14
Sweetwater

EOT
        );

        $this->sut->arrayValuesRenderer($this->sut->multiplesIterator(3, 5, 1, 15));
    }

    /**
     * @test
     * @return void
     */
    public function arrayValuesRendererWithNestedArrays()
    {
        $nestedOutput = [
            1,
            2,
            [
                'Sweet',
                4,
                'Water',
            ],
            'Sweet',
        ];

        $this->expectOutputString(
            <<<EOT
1
2
Sweet
4
Water
Sweet

EOT
        );

        $this->sut->arrayValuesRenderer($nestedOutput);
    }
}
