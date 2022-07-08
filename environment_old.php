<?php
        $ENV = 'TEST'; // ou TEST

        if ($ENV == 'PROD') {
                define('URL', 'https://api1.binance.com');
                define('secret', 'DTl22FQUitJvlVVsvwZLEet5kdsgohfGtNZtsi93s7HobjSayze1UYdxuB1jNWWG');
                define('header', [
                        'Accepts: */*',
                        'Content-Type: application/json',
                        'X-MBX-APIKEY: AMFH8V5BOUll5KNLvH8Iv1Vj0pX7b434M5xMhXMlhQyhxYpMnmBTMeNiCet4sOso'
                        ]
                );
                
                $api = new Binance\API('AMFH8V5BOUll5KNLvH8Iv1Vj0pX7b434M5xMhXMlhQyhxYpMnmBTMeNiCet4sOso','DTl22FQUitJvlVVsvwZLEet5kdsgohfGtNZtsi93s7HobjSayze1UYdxuB1jNWWG');
                
                define('lotstepsize', [
                        'ACMBTC' => 100,
                        'ADXBTC' => 1,
                        'AGIBTC' => 1,
                        'AMBBTC' => 1,
                        'APPCBTC' => 1,
                        'ARKBTC' => 1,
                        'ASRBTC' => 100,
                        'ASTBTC' => 1,
                        'ATMBTC' => 100,
                        'AUCTIONBTC' => 100,
                        'AUTOBTC' => 10000,
                        'BADGERBTC' => 100,
                        'BARBTC' => 100,
                        'BCDBTC' => 1,
                        'BEAMBTC' => 100,
                        'BRDBTC' => 1,
                        'BTGBTC' => 100,
                        'CDTBTC' => 1,
                        'CFXBTC' => 10,
                        'CNDBTC' => 1,
                        'DLTBTC' => 1,
                        'EASYBTC' => 100,
                        'ELFBTC' => 1,
                        'EPSBTC' => 10,
                        'EVXBTC' => 1,
                        'EZBTC' => 100,
                        'FISBTC' => 10,
                        'FORBTC' => 1,
                        'FORTHBTC' => 100,
                        'FXSBTC' => 100,
                        'GOBTC' => 1,
                        'GRSBTC' => 1,
                        'GVTBTC' => 100,
                        'HNTBTC' => 100,
                        'IDEXBTC' => 1,
                        'JUVBTC' => 100,
                        'LPTBTC' => 100,
                        'MDABTC' => 1,
                        'MIRBTC' => 100,
                        'MTHBTC' => 1,
                        'NASBTC' => 100,
                        'NAVBTC' => 1,
                        'NEBLBTC' => 1,
                        'NXSBTC' => 1,
                        'OAXBTC' => 1,
                        'OSTBTC' => 1,
                        'PERPBTC' => 100,
                        'PHABTC' => 1,
                        'PHBBTC' => 1,
                        'PIVXBTC' => 1,
                        'POABTC' => 1,
                        'POLSBTC' => 100,
                        'POWRBTC' => 1,
                        'PPTBTC' => 1,
                        'PSGBTC' => 100,
                        'QKCBTC' => 1,
                        'QLCBTC' => 1,
                        'QSPBTC' => 1,
                        'RAMPBTC' => 1,
                        'RCNBTC' => 1,
                        'RDNBTC' => 1,
                        'RENBTCBTC' => 100000,
                        'REQBTC' => 1,
                        'RIFBTC' => 1,
                        'SCRTBTC' => 1,
                        'SKYBTC' => 1,
                        'SNGLSBTC' => 1,
                        'SNMBTC' => 10,
                        'SNTBTC' => 1,
                        'STEEMBTC' => 1,
                        'STRAXBTC' => 10,
                        'SUSDBTC' => 1,
                        'SYSBTC' => 1,
                        'TRUBTC' => 10,
                        'TVKBTC' => 1,
                        'TWTBTC' => 1,
                        'VIABTC' => 1,
                        'VIBBTC' => 1,
                        'VIDTBTC' => 1,
                        'WABIBTC' => 1,
                        'WBTCBTC' => 100000,
                        'WPRBTC' => 1,
                        'YOYOBTC' => 1
                        ]
                );

                define('minprice', [
                        'ACMBTC' => 0.0000001,
                        'ADXBTC' => 0.00000001,
                        'AGIBTC' => 0.00000001,
                        'AMBBTC' => 0.00000001,
                        'APPCBTC' => 0.00000001,
                        'ARKBTC' => 0.00000001,
                        'ASRBTC' => 0.0000001,
                        'ASTBTC' => 0.00000001,
                        'ATMBTC' => 0.0000001,
                        'AUCTIONBTC' => 0.0000001,
                        'AUTOBTC' => 0.00001,
                        'BADGERBTC' => 0.0000001,
                        'BARBTC' => 0.0000001,
                        'BCDBTC' => 0.00000001,
                        'BEAMBTC' => 0.00000001,
                        'BRDBTC' => 0.00000001,
                        'BTGBTC' => 0.000001,
                        'CDTBTC' => 0.00000001,
                        'CFXBTC' => 0.00000001,
                        'CNDBTC' => 0.00000001,
                        'DLTBTC' => 0.00000001,
                        'EASYBTC' => 0.0000001,
                        'ELFBTC' => 0.00000001,
                        'EPSBTC' => 0.00000001,
                        'EVXBTC' => 0.00000001,
                        'EZBTC' => 0.0000001,
                        'FISBTC' => 0.00000001,
                        'FORBTC' => 0.00000001,
                        'FORTHBTC' => 0.0000001,
                        'FXSBTC' => 0.0000001,
                        'GOBTC' => 0.00000001,
                        'GRSBTC' => 0.00000001,
                        'GVTBTC' => 0.0000001,
                        'HNTBTC' => 0.0000001,
                        'IDEXBTC' => 0.00000001,
                        'JUVBTC' => 0.0000001,
                        'LPTBTC' => 0.0000001,
                        'MDABTC' => 0.00000001,
                        'MIRBTC' => 0.0000001,
                        'MTHBTC' => 0.00000001,
                        'NASBTC' => 0.0000001,
                        'NAVBTC' => 0.00000001,
                        'NEBLBTC' => 0.00000001,
                        'NXSBTC' => 0.00000001,
                        'OAXBTC' => 0.00000001,
                        'OSTBTC' => 0.00000001,
                        'PERPBTC' => 0.0000001,
                        'PHABTC' => 0.00000001,
                        'PHBBTC' => 0.00000001,
                        'PIVXBTC' => 0.00000001,
                        'POABTC' => 0.00000001,
                        'POLSBTC' => 0.00000001,
                        'POWRBTC' => 0.00000001,
                        'PPTBTC' => 0.00000001,
                        'PSGBTC' => 0.0000001,
                        'QKCBTC' => 0.00000001,
                        'QLCBTC' => 0.00000001,
                        'QSPBTC' => 0.00000001,
                        'RAMPBTC' => 0.00000001,
                        'RCNBTC' => 0.00000001,
                        'RDNBTC' => 0.00000001,
                        'RENBTCBTC' => 0.00001,
                        'REQBTC' => 0.00000001,
                        'RIFBTC' => 0.00000001,
                        'SCRTBTC' => 0.00000001,
                        'SKYBTC' => 0.00000001,
                        'SNGLSBTC' => 0.00000001,
                        'SNMBTC' => 0.00000001,
                        'SNTBTC' => 0.00000001,
                        'STEEMBTC' => 0.00000001,
                        'STRAXBTC' => 0.00000001,
                        'SUSDBTC' => 0.00000001,
                        'SYSBTC' => 0.00000001,
                        'TRUBTC' => 0.00000001,
                        'TVKBTC' => 0.00000001,
                        'TWTBTC' => 0.00000001,
                        'VIABTC' => 0.00000001,
                        'VIBBTC' => 0.00000001,
                        'VIDTBTC' => 0.00000001,
                        'WABIBTC' => 0.00000001,
                        'WBTCBTC' => 0.00001,
                        'WPRBTC' => 0.00000001,
                        'YOYOBTC' => 0.00000001
                        ]
                );
        }

        if ($ENV == 'TEST') {
                define('URL', 'https://testnet.binance.vision');
                define('secret', 'iq6A17R6Rr8RitNxJcxKfOi0f33J0CWITcVcmTbxySfFp070Q7HiDCgo4spdoVps');
                define('header', [
                        'Accepts: */*',
                        'Content-Type: application/json',
                        'X-MBX-APIKEY: AEOlpWcRebXAr7eHnySsvJ9Waff15R29YgFYekCSethAVvUrWxvx1n6tGlAm1Io2'
                        ]
                );

                $api = new Binance\API('AEOlpWcRebXAr7eHnySsvJ9Waff15R29YgFYekCSethAVvUrWxvx1n6tGlAm1Io2','iq6A17R6Rr8RitNxJcxKfOi0f33J0CWITcVcmTbxySfFp070Q7HiDCgo4spdoVps', true);
                
                define('lotstepsize', [
                        'BNBBTC' => 100,
                        'ETHBTC' => 100000,
                        'LTCBTC' => 100000,
                        'TRXBTC' => 10,
                        'XRPBTC' => 10
                        ]
                );

                define('minprice', [
                        'BNBBTC' => 0.0000001,
                        'ETHBTC' => 0.000001,
                        'LTCBTC' => 0.000001,
                        'TRXBTC' => 0.00000001,
                        'XRPBTC' => 0.00000001
                        ]
                );                
        }
?>