<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aarBanks = [
            [
                'bank_cd' => '002',
                'name' => 'BANK BRI',
            ],
            [
                'bank_cd' => '014',
                'name' => 'BANK BCA',
            ],
            [
                'bank_cd' => '008',
                'name' => 'BANK MANDIRI',
            ],
            [
                'bank_cd' => '009',
                'name' => 'BANK BNI',
            ],
            [
                'bank_cd' => '427',
                'name' => 'BANK BNI SYARIAH',
            ],
            [
                'bank_cd' => '451',
                'name' => 'BANK SYARIAH MANDIRI (BSM)',
            ],
            [
                'bank_cd' => '022',
                'name' => 'BANK CIMB NIAGA',
            ],
            [
                'bank_cd' => '022',
                'name' => 'BANK CIMB NIAGA SYARIAH',
            ],
            [
                'bank_cd' => '147',
                'name' => 'BANK MUAMALAT',
            ],
            [
                'bank_cd' => '213',
                'name' => 'BANK BTPN',
            ],
            [
                'bank_cd' => '547',
                'name' => 'BANK BTPN SYARIAH',
            ],
            [
                'bank_cd' => '213',
                'name' => 'JENIUS',
            ],
            [
                'bank_cd' => '422',
                'name' => 'BANK BRI SYARIAH',
            ],
            [
                'bank_cd' => '200',
                'name' => 'BANK BTN',
            ],
            [
                'bank_cd' => '013',
                'name' => 'BANK PERMATA',
            ],
            [
                'bank_cd' => '011',
                'name' => 'BANK DANAMON',
            ],
            [
                'bank_cd' => '016',
                'name' => 'BANK BII MAYBANK',
            ],
            [
                'bank_cd' => '426',
                'name' => 'BANK MEGA',
            ],
            [
                'bank_cd' => '153',
                'name' => 'BANK SINARMAS',
            ],
            [
                'bank_cd' => '950',
                'name' => 'BANK COMMONWEALTH',
            ],
            [
                'bank_cd' => '028',
                'name' => 'BANK OCBC NISP',
            ],
            [
                'bank_cd' => '441',
                'name' => 'BANK BUKOPIN',
            ],
            [
                'bank_cd' => '521',
                'name' => 'BANK BUKOPIN SYARIAH',
            ],
            [
                'bank_cd' => '536',
                'name' => 'BANK BCA SYARIAH',
            ],
            [
                'bank_cd' => '026',
                'name' => 'BANK LIPPO',
            ],
            [
                'bank_cd' => '031',
                'name' => 'CITIBANK',
            ],
            [
                'bank_cd' => '789',
                'name' => 'INDOSAT DOMPETKU',
            ],
            [
                'bank_cd' => '911',
                'name' => 'TELKOMSEL TCASH',
            ],
            [
                'bank_cd' => '911',
                'name' => 'LINKAJA',
            ],
            [
                'bank_cd' => '110',
                'name' => 'BANK JABAR',
            ],
            [
                'bank_cd' => '111',
                'name' => 'BANK DKI JAKARTA',
            ],
            [
                'bank_cd' => '112',
                'name' => 'BPD DIY (YOGYAKARTA)',
            ],
            [
                'bank_cd' => '113',
                'name' => 'BANK JATENG (JAWA TENGAH)',
            ],
            [
                'bank_cd' => '114',
                'name' => 'BANK JATIM (JAWA BARAT)',
            ],
            [
                'bank_cd' => '115',
                'name' => 'BPD JAMBI',
            ],
            [
                'bank_cd' => '116',
                'name' => 'BPD ACEH',
            ],
            [
                'bank_cd' => '116',
                'name' => 'BPD ACEH SYARIAH',
            ],
            [
                'bank_cd' => '117',
                'name' => 'BANK SUMUT',
            ],
            [
                'bank_cd' => '118',
                'name' => 'BANK NAGARI (BANK SUMBAR)',
            ],
            [
                'bank_cd' => '119',
                'name' => 'BANK RIAU KEPRI',
            ],
            [
                'bank_cd' => '120',
                'name' => 'BANK SUMSEL BABEL',
            ],
            [
                'bank_cd' => '121',
                'name' => 'BANK LAMPUNG',
            ],
            [
                'bank_cd' => '122',
                'name' => 'BANK KALSEL (BANK KALIMANTAN SELATAN)',
            ],
            [
                'bank_cd' => '123',
                'name' => 'BANK KALBAR (BANK KALIMANTAN BARAT)',
            ],
            [
                'bank_cd' => '124',
                'name' => 'BANK KALTIMTARA (BANK KALIMANTAN TIMUR DAN UTARA)',
            ],
            [
                'bank_cd' => '125',
                'name' => 'BANK KALTENG (BANK KALIMANTAN TENGAH)',
            ],
            [
                'bank_cd' => '126',
                'name' => 'BANK SULSELBAR (BANK SULAWESI SELATAN DAN BARAT)',
            ],
            [
                'bank_cd' => '127',
                'name' => 'BANK SULUTGO (BANK SULAWESI UTARA DAN GORONTALO)',
            ],
            [
                'bank_cd' => '128',
                'name' => 'BANK NTB',
            ],
            [
                'bank_cd' => '128',
                'name' => 'BANK NTB SYARIAH',
            ],
            [
                'bank_cd' => '129',
                'name' => 'BANK BPD BALI',
            ],
            [
                'bank_cd' => '130',
                'name' => 'BANK NTT',
            ],
            [
                'bank_cd' => '131',
                'name' => 'BANK MALUKU MALUT',
            ],
            [
                'bank_cd' => '132',
                'name' => 'BANK PAPUA',
            ],
            [
                'bank_cd' => '133',
                'name' => 'BANK BENGKULU',
            ],
            [
                'bank_cd' => '134',
                'name' => 'BANK SULTENG (BANK SULAWESI TENGAH)',
            ],
            [
                'bank_cd' => '135',
                'name' => 'BANK SULTRA',
            ],
            [
                'bank_cd' => '137',
                'name' => 'BANK BPD BANTEN',
            ],
            [
                'bank_cd' => '003',
                'name' => 'BANK EKSPOR INDONESIA',
            ],
            [
                'bank_cd' => '019',
                'name' => 'BANK PANIN',
            ],
            [
                'bank_cd' => '517',
                'name' => 'BANK PANIN DUBAI SYARIAH',
            ],
            [
                'bank_cd' => '020',
                'name' => 'BANK ARTA NIAGA KENCANA',
            ],
            [
                'bank_cd' => '023',
                'name' => 'BANK UOB INDONESIA (BANK BUANA INDONESIA)',
            ],
            [
                'bank_cd' => '030',
                'name' => 'AMERICAN EXPRESS BANK LTD',
            ],
            [
                'bank_cd' => '031',
                'name' => 'CITIBANK N.A.',
            ],
            [
                'bank_cd' => '032',
                'name' => 'JP. MORGAN CHASE BANK, N.A.',
            ],
            [
                'bank_cd' => '033',
                'name' => 'BANK OF AMERICA, N.A',
            ],
            [
                'bank_cd' => '034',
                'name' => 'ING INDONESIA BANK',
            ],
            [
                'bank_cd' => '036',
                'name' => 'BANK MULTICOR',
            ],
            [
                'bank_cd' => '037',
                'name' => 'BANK ARTHA GRAHA INTERNASIONAL',
            ],
            [
                'bank_cd' => '039',
                'name' => 'BANK CREDIT AGRICOLE INDOSUEZ',
            ],
            [
                'bank_cd' => '040',
                'name' => 'THE BANGKOK BANK COMP. LTD',
            ],
            [
                'bank_cd' => '041',
                'name' => 'BANK HSBC',
            ],
            [
                'bank_cd' => '042',
                'name' => 'THE BANK OF TOKYO MITSUBISHI UFJ LTD',
            ],
            [
                'bank_cd' => '045',
                'name' => 'BANK SUMITOMO MITSUI INDONESIA',
            ],
            [
                'bank_cd' => '046',
                'name' => 'BANK DBS INDONESIA',
            ],
            [
                'bank_cd' => '046',
                'name' => 'DIGIBANK',
            ],
            [
                'bank_cd' => '047',
                'name' => 'BANK RESONA PERDANIA',
            ],
            [
                'bank_cd' => '048',
                'name' => 'BANK MIZUHO INDONESIA',
            ],
            [
                'bank_cd' => '050',
                'name' => 'STANDARD CHARTERED BANK',
            ],
            [
                'bank_cd' => '052',
                'name' => 'BANK ABN AMRO',
            ],
            [
                'bank_cd' => '053',
                'name' => 'BANK KEPPEL TATLEE BUANA',
            ],
            [
                'bank_cd' => '054',
                'name' => 'BANK CAPITAL INDONESIA',
            ],
            [
                'bank_cd' => '057',
                'name' => 'BANK BNP PARIBAS INDONESIA',
            ],
            [
                'bank_cd' => '023',
                'name' => 'BANK UOB INDONESIA',
            ],
            [
                'bank_cd' => '059',
                'name' => 'KOREA EXCHANGE BANK DANAMON',
            ],
            [
                'bank_cd' => '060',
                'name' => 'RABOBANK INTERNASIONAL INDONESIA',
            ],
            [
                'bank_cd' => '061',
                'name' => 'BANK ANZ INDONESIA',
            ],
            [
                'bank_cd' => '068',
                'name' => 'BANK WOORI SAUDARA',
            ],
            [
                'bank_cd' => '069',
                'name' => 'BANK OF CHINA',
            ],
            [
                'bank_cd' => '076',
                'name' => 'BANK BUMI ARTA',
            ],
            [
                'bank_cd' => '087',
                'name' => 'BANK EKONOMI',
            ],
            [
                'bank_cd' => '088',
                'name' => 'BANK ANTARDAERAH',
            ],
            [
                'bank_cd' => '089',
                'name' => 'BANK HAGA',
            ],
            [
                'bank_cd' => '093',
                'name' => 'BANK IFI',
            ],
            [
                'bank_cd' => '095',
                'name' => 'BANK CENTURY',
            ],
            [
                'bank_cd' => '097',
                'name' => 'BANK MAYAPADA',
            ],
            [
                'bank_cd' => '145',
                'name' => 'BANK NUSANTARA PARAHYANGAN',
            ],
            [
                'bank_cd' => '146',
                'name' => 'BANK SWADESI (BANK OF INDIA INDONESIA)',
            ],
            [
                'bank_cd' => '151',
                'name' => 'BANK MESTIKA DHARMA',
            ],
            [
                'bank_cd' => '152',
                'name' => 'BANK SHINHAN INDONESIA (BANK METRO EXPRESS)',
            ],
            [
                'bank_cd' => '157',
                'name' => 'BANK MASPION INDONESIA',
            ],
            [
                'bank_cd' => '159',
                'name' => 'BANK HAGAKITA',
            ],
            [
                'bank_cd' => '161',
                'name' => 'BANK GANESHA',
            ],
            [
                'bank_cd' => '162',
                'name' => 'BANK WINDU KENTJANA',
            ],
            [
                'bank_cd' => '164',
                'name' => 'BANK ICBC INDONESIA (HALIM INDONESIA BANK)',
            ],
            [
                'bank_cd' => '166',
                'name' => 'BANK HARMONI INTERNATIONAL',
            ],
            [
                'bank_cd' => '167',
                'name' => 'BANK QNB KESAWAN (BANK QNB INDONESIA)',
            ],
            [
                'bank_cd' => '212',
                'name' => 'BANK HIMPUNAN SAUDARA 1906',
            ],
            [
                'bank_cd' => '405',
                'name' => 'BANK SWAGUNA',
            ],
            [
                'bank_cd' => '459',
                'name' => 'BANK BISNIS INTERNASIONAL',
            ],
            [
                'bank_cd' => '466',
                'name' => 'BANK SRI PARTHA',
            ],
            [
                'bank_cd' => '472',
                'name' => 'BANK JASA JAKARTA',
            ],
            [
                'bank_cd' => '484',
                'name' => 'BANK BINTANG MANUNGGAL',
            ],
            [
                'bank_cd' => '485',
                'name' => 'BANK MNC INTERNASIONAL (BANK BUMIPUTERA)',
            ],
            [
                'bank_cd' => '490',
                'name' => 'BANK YUDHA BHAKTI',
            ],
            [
                'bank_cd' => '491',
                'name' => 'BANK MITRANIAGA',
            ],
            [
                'bank_cd' => '494',
                'name' => 'BANK BRI AGRO NIAGA',
            ],
            [
                'bank_cd' => '498',
                'name' => 'BANK SBI INDONESIA (BANK INDOMONEX)',
            ],
            [
                'bank_cd' => '501',
                'name' => 'BANK ROYAL INDONESIA',
            ],
            [
                'bank_cd' => '503',
                'name' => 'BANK NATIONAL NOBU (BANK ALFINDO)',
            ],
            [
                'bank_cd' => '506',
                'name' => 'BANK MEGA SYARIAH',
            ],
            [
                'bank_cd' => '513',
                'name' => 'BANK INA PERDANA',
            ],
            [
                'bank_cd' => '517',
                'name' => 'BANK HARFA',
            ],
            [
                'bank_cd' => '520',
                'name' => 'PRIMA MASTER BANK',
            ],
            [
                'bank_cd' => '521',
                'name' => 'BANK PERSYARIKATAN INDONESIA',
            ],
            [
                'bank_cd' => '525',
                'name' => 'BANK AKITA',
            ],
            [
                'bank_cd' => '526',
                'name' => 'LIMAN INTERNATIONAL BANK',
            ],
            [
                'bank_cd' => '531',
                'name' => 'ANGLOMAS INTERNASIONAL BANK',
            ],
            [
                'bank_cd' => '523',
                'name' => 'BANK SAHABAT SAMPEORNA (BANK DIPO INTERNATIONAL)',
            ],
            [
                'bank_cd' => '535',
                'name' => 'BANK KESEJAHTERAAN EKONOMI',
            ],
            [
                'bank_cd' => '542',
                'name' => 'BANK ARTOS INDONESIA',
            ],
            [
                'bank_cd' => '547',
                'name' => 'BANK PURBA DANARTA',
            ],
            [
                'bank_cd' => '548',
                'name' => 'BANK MULTI ARTA SENTOSA',
            ],
            [
                'bank_cd' => '553',
                'name' => 'BANK MAYORA INDONESIA',
            ],
            [
                'bank_cd' => '555',
                'name' => 'BANK INDEX SELINDO',
            ],
            [
                'bank_cd' => '566',
                'name' => 'BANK VICTORIA INTERNATIONAL',
            ],
            [
                'bank_cd' => '558',
                'name' => 'BANK EKSEKUTIF',
            ],
            [
                'bank_cd' => '559',
                'name' => 'CENTRATAMA NASIONAL BANK',
            ],
            [
                'bank_cd' => '562',
                'name' => 'BANK FAMA INTERNASIONAL',
            ],
            [
                'bank_cd' => '564',
                'name' => 'BANK MANDIRI TASPEN POS (BANK SINAR HARAPAN BALI)',
            ],
            [
                'bank_cd' => '567',
                'name' => 'BANK HARDA',
            ],
            [
                'bank_cd' => '945',
                'name' => 'BANK AGRIS (BANK FINCONESIA)',
            ],
            [
                'bank_cd' => '946',
                'name' => 'BANK MERINCORP',
            ],
            [
                'bank_cd' => '947',
                'name' => 'BANK MAYBANK INDOCORP',
            ],
            [
                'bank_cd' => '948',
                'name' => 'BANK OCBC – INDONESIA',
            ],
            [
                'bank_cd' => '949',
                'name' => 'BANK CTBC (CHINA TRUST) INDONESIA',
            ],
            [
                'bank_cd' => '425',
                'name' => 'BANK BJB SYARIAH',
            ],
            [
                'bank_cd' => '688',
                'name' => 'BPR KS (KARYAJATNIKA SEDAYA)',
            ],
        ];

        foreach ($aarBanks as $i => $bank){
            $mBank = new Bank();
            $mBank->bank_cd = $bank['bank_cd'];
            $mBank->name = $bank['name'];
            $mBank->save();
        }
    }
}


