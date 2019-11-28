<?php

namespace WhichBrowser\Data;

use WhichBrowser\Constants\Flag;

DeviceModels::$SYMBIAN_MODELS = [
    'BenQ P30'                                  => [ 'BenQ', 'P30', 'flag' => Flag::UIQ ],
    'BenQ P31'                                  => [ 'BenQ', 'P31', 'flag' => Flag::UIQ ],
    'RIZR-Z8'                                   => [ 'Motorola', 'RIZR Z8', 'flag' => Flag::UIQ ],
    'RIZR-Z10'                                  => [ 'Motorola', 'RIZR Z10', 'flag' => Flag::UIQ ],
    'A920'                                      => [ 'Motorola', 'A920', 'flag' => Flag::UIQ ],
    'A925'                                      => [ 'Motorola', 'A925', 'flag' => Flag::UIQ ],
    'A1000'                                     => [ 'Motorola', 'A1000', 'flag' => Flag::UIQ ],
    'M1000'                                     => [ 'Motorola', 'M1000', 'flag' => Flag::UIQ, 'carrier' => 'DoCoMo' ],
    'G700'                                      => [ 'Sony Ericsson', 'G700', 'flag' => Flag::UIQ ],
    'G900'                                      => [ 'Sony Ericsson', 'G900', 'flag' => Flag::UIQ ],
    'M600i'                                     => [ 'Sony Ericsson', 'M600', 'flag' => Flag::UIQ ],
    'P910i'                                     => [ 'Sony Ericsson', 'P910', 'flag' => Flag::UIQ ],
    'P990i'                                     => [ 'Sony Ericsson', 'P990', 'flag' => Flag::UIQ ],
    'P1i'                                       => [ 'Sony Ericsson', 'P1', 'flag' => Flag::UIQ ],
    'W950i'                                     => [ 'Sony Ericsson', 'W950', 'flag' => Flag::UIQ ],
    'W960i'                                     => [ 'Sony Ericsson', 'W960', 'flag' => Flag::UIQ ],

    'LG KS10'                                   => [ 'LG', 'KS10 Joy', 'flag' => Flag::S60 ],
    'LGKT610'                                   => [ 'LG', 'KT610', 'flag' => Flag::S60 ],
    'LGKT615'                                   => [ 'LG', 'KT615', 'flag' => Flag::S60 ],
    'C5-00!'                                    => [ 'Nokia', 'C5-00', 'flag' => Flag::S60 ],
    'C5-01'                                     => [ 'Nokia', 'C5-01', 'flag' => Flag::S60 ],
    'C5-03!'                                    => [ 'Nokia', 'C5-03', 'flag' => Flag::S60 ],
    'C5-04'                                     => [ 'Nokia', 'C5-04', 'flag' => Flag::S60 ],
    'C5-05'                                     => [ 'Nokia', 'C5-05', 'flag' => Flag::S60 ],
    'C5-06'                                     => [ 'Nokia', 'C5-06', 'flag' => Flag::S60 ],
    'C6-00!'                                    => [ 'Nokia', 'C6-00', 'flag' => Flag::S60 ],
    'C6-01!'                                    => [ 'Nokia', 'C6-01', 'flag' => Flag::S60 ],
    'C7-00!'                                    => [ 'Nokia', 'C7-00', 'flag' => Flag::S60 ],
    'E5-00!'                                    => [ 'Nokia', 'E5-00', 'flag' => Flag::S60 ],
    'E6'                                        => [ 'Nokia', 'E6-00', 'flag' => Flag::S60 ],
    'E6-00'                                     => [ 'Nokia', 'E6-00', 'flag' => Flag::S60 ],
    'E7-00'                                     => [ 'Nokia', 'E7-00', 'flag' => Flag::S60 ],
    'N8-00'                                     => [ 'Nokia', 'N8-00', 'flag' => Flag::S60 ],
    'T7-00'                                     => [ 'Nokia', 'T7-00', 'flag' => Flag::S60 ],
    'X5-00'                                     => [ 'Nokia', 'X5-00', 'flag' => Flag::S60 ],
    'X5-01'                                     => [ 'Nokia', 'X5-01', 'flag' => Flag::S60 ],
    'X6-00!'                                    => [ 'Nokia', 'X6-00', 'flag' => Flag::S60 ],
    'X7-00!'                                    => [ 'Nokia', 'X7-00', 'flag' => Flag::S60 ],
    'N-Gage'                                    => [ 'Nokia', 'N-Gage', 'flag' => Flag::S60 ],
    'N-GageQD'                                  => [ 'Nokia', 'N-Gage QD', 'flag' => Flag::S60 ],
    'E50(-[1-9])?$!'                            => [ 'Nokia', 'E50', 'flag' => Flag::S60 ],
    'E51(-[1-9])?$!'                            => [ 'Nokia', 'E51', 'flag' => Flag::S60 ],
    'E52(-[1-9])?$!'                            => [ 'Nokia', 'E52', 'flag' => Flag::S60 ],
    'E55(-[1-9])?$!'                            => [ 'Nokia', 'E55', 'flag' => Flag::S60 ],
    'E60(-[1-9])?$!'                            => [ 'Nokia', 'E60', 'flag' => Flag::S60 ],
    'E61i!'                                     => [ 'Nokia', 'E61i', 'flag' => Flag::S60 ],
    'E61(-[1-9])?$!'                            => [ 'Nokia', 'E61', 'flag' => Flag::S60 ],
    'E62(-[1-9])?$!'                            => [ 'Nokia', 'E62', 'flag' => Flag::S60 ],
    'E63(-[1-9])?$!'                            => [ 'Nokia', 'E63', 'flag' => Flag::S60 ],
    'E65(-[1-9])?$!'                            => [ 'Nokia', 'E65', 'flag' => Flag::S60 ],
    'E66(-[1-9])?$!'                            => [ 'Nokia', 'E66', 'flag' => Flag::S60 ],
    'E70(-[1-9])?$!'                            => [ 'Nokia', 'E70', 'flag' => Flag::S60 ],
    'E71x'                                      => [ 'Nokia', 'E71x', 'flag' => Flag::S60 ],
    'E71(-[1-9])?$!'                            => [ 'Nokia', 'E71', 'flag' => Flag::S60 ],
    'E72(-[1-9])?$!'                            => [ 'Nokia', 'E72', 'flag' => Flag::S60 ],
    'E73(-[1-9])?$!'                            => [ 'Nokia', 'E73 Mode', 'flag' => Flag::S60 ],
    'E75(-[1-9])?$!'                            => [ 'Nokia', 'E75', 'flag' => Flag::S60 ],
    'E90(-[1-9])?$!'                            => [ 'Nokia', 'E90 Communicator', 'flag' => Flag::S60 ],
    'E-90-1'                                    => [ 'Nokia', 'E90 Communicator', 'flag' => Flag::S60 ],
    'N70(-[1-9])?$!'                            => [ 'Nokia', 'N70', 'flag' => Flag::S60 ],
    'N71(-[1-9])?$!'                            => [ 'Nokia', 'N71', 'flag' => Flag::S60 ],
    'N72(-[1-9])?$!'                            => [ 'Nokia', 'N72', 'flag' => Flag::S60 ],
    'N73(-[1-9])?$!'                            => [ 'Nokia', 'N73', 'flag' => Flag::S60 ],
    'N75(-[1-9])?$!'                            => [ 'Nokia', 'N75', 'flag' => Flag::S60 ],
    'N76(-[1-9])?$!'                            => [ 'Nokia', 'N76', 'flag' => Flag::S60 ],
    'N77(-[1-9])?$!'                            => [ 'Nokia', 'N77', 'flag' => Flag::S60 ],
    'N78(-[1-9])?$!'                            => [ 'Nokia', 'N78', 'flag' => Flag::S60 ],
    'N79(-[1-9])?$!'                            => [ 'Nokia', 'N79', 'flag' => Flag::S60 ],
    'N80(-[1-9])?$!'                            => [ 'Nokia', 'N80', 'flag' => Flag::S60 ],
    'N81(-[1-9])?$!'                            => [ 'Nokia', 'N81', 'flag' => Flag::S60 ],
    'Nokia N81'                                 => [ 'Nokia', 'N81', 'flag' => Flag::S60 ],
    'Nokia N81 8GB'                             => [ 'Nokia', 'N81 8GB', 'flag' => Flag::S60 ],
    'N82(-[1-9])?$!'                            => [ 'Nokia', 'N82', 'flag' => Flag::S60 ],
    'N85(-[1-9])?$!'                            => [ 'Nokia', 'N85', 'flag' => Flag::S60 ],
    'N86(-[1-9])?$!'                            => [ 'Nokia', 'N86 8MP', 'flag' => Flag::S60 ],
    'N86 ?8MP$!'                                => [ 'Nokia', 'N86 8MP', 'flag' => Flag::S60 ],
    'N90(-[1-9])?$!'                            => [ 'Nokia', 'N90', 'flag' => Flag::S60 ],
    'N91(-[1-9])?$!'                            => [ 'Nokia', 'N91', 'flag' => Flag::S60 ],
    'N92(-[1-9])?$!'                            => [ 'Nokia', 'N92', 'flag' => Flag::S60 ],
    'N93(-[1-9])?$!'                            => [ 'Nokia', 'N93', 'flag' => Flag::S60 ],
    'N93i'                                      => [ 'Nokia', 'N93i', 'flag' => Flag::S60 ],
    'N95(-[1-9])?$!'                            => [ 'Nokia', 'N95', 'flag' => Flag::S60 ],
    'N95[ -]8GB(-[1-9])?!'                      => [ 'Nokia', 'N95 8GB', 'flag' => Flag::S60 ],
    'N96(-[1-9])?$!'                            => [ 'Nokia', 'N96', 'flag' => Flag::S60 ],
    'N97(-[1-3])?$!'                            => [ 'Nokia', 'N97', 'flag' => Flag::S60 ],
    'N97i'                                      => [ 'Nokia', 'N97', 'flag' => Flag::S60 ],
    'N97(-[4-5])?$!'                            => [ 'Nokia', 'N97 Mini', 'flag' => Flag::S60 ],
    'N97 ?mini!'                                => [ 'Nokia', 'N97 Mini', 'flag' => Flag::S60 ],
    '500'                                       => [ 'Nokia', '500', 'flag' => Flag::S60 ],
    '600'                                       => [ 'Nokia', '600', 'flag' => Flag::S60 ],
    '603'                                       => [ 'Nokia', '603', 'flag' => Flag::S60 ],
    '700'                                       => [ 'Nokia', '700', 'flag' => Flag::S60 ],
    '701'                                       => [ 'Nokia', '701', 'flag' => Flag::S60 ],
    '702T'                                      => [ 'Nokia', '702T', 'flag' => Flag::S60 ],
    '801T'                                      => [ 'Nokia', '801T', 'flag' => Flag::S60 ],
    '808'                                       => [ 'Nokia', '808 PureView', 'flag' => Flag::S60 ],
    '808PureView'                               => [ 'Nokia', '808 PureView', 'flag' => Flag::S60 ],
    '808 PureView'                              => [ 'Nokia', '808 PureView', 'flag' => Flag::S60 ],
    '3230'                                      => [ 'Nokia', '3230', 'flag' => Flag::S60 ],
    '3250'                                      => [ 'Nokia', '3250', 'flag' => Flag::S60 ],
    '3650'                                      => [ 'Nokia', '3650', 'flag' => Flag::S60 ],
    '3660'                                      => [ 'Nokia', '3660', 'flag' => Flag::S60 ],
    '5228'                                      => [ 'Nokia', '5228', 'flag' => Flag::S60 ],
    '5233!'                                     => [ 'Nokia', '5228', 'flag' => Flag::S60 ],                     // The 5233 is known as 5228
    'N5233!'                                    => [ 'Nokia', '5228', 'flag' => Flag::S60 ],                     // The 5233 is known as 5228
    '5230!'                                     => [ 'Nokia', '5230', 'flag' => Flag::S60 ],
    '5232'                                      => [ 'Nokia', '5232', 'flag' => Flag::S60 ],
    '5235!'                                     => [ 'Nokia', '5235 Ovi Music Unlimited', 'flag' => Flag::S60 ],
    '5236'                                      => [ 'Nokia', '5236', 'flag' => Flag::S60 ],
    '5238'                                      => [ 'Nokia', '5238', 'flag' => Flag::S60 ],
    '5250'                                      => [ 'Nokia', '5250', 'flag' => Flag::S60 ],
    '5320!'                                     => [ 'Nokia', '5320 XpressMusic', 'flag' => Flag::S60 ],
    '5500d!'                                    => [ 'Nokia', '5500 Sport', 'flag' => Flag::S60 ],
    '5530!'                                     => [ 'Nokia', '5530 XpressMusic', 'flag' => Flag::S60 ],
    '5630!'                                     => [ 'Nokia', '5630 XpressMusic', 'flag' => Flag::S60 ],
    '5700!'                                     => [ 'Nokia', '5700 XpressMusic', 'flag' => Flag::S60 ],
    '5730!'                                     => [ 'Nokia', '5730 XpressMusic', 'flag' => Flag::S60 ],
    '5800!'                                     => [ 'Nokia', '5800 XpressMusic', 'flag' => Flag::S60 ],
    '6110Navigator'                             => [ 'Nokia', '6110 Navigator', 'flag' => Flag::S60 ],
    '6120c!'                                    => [ 'Nokia', '6120 classic', 'flag' => Flag::S60 ],
    '6121c!'                                    => [ 'Nokia', '6121 classic', 'flag' => Flag::S60 ],
    '6122c!'                                    => [ 'Nokia', '6124 classic', 'flag' => Flag::S60 ],             // The 6122 is known as 6124
    '6124c'                                     => [ 'Nokia', '6124 classic', 'flag' => Flag::S60 ],
    '6210 ?Navigator!'                          => [ 'Nokia', '6210 Navigator', 'flag' => Flag::S60 ],
    '6220c!'                                    => [ 'Nokia', '6220 classic', 'flag' => Flag::S60 ],
    '6260'                                      => [ 'Nokia', '6260', 'flag' => Flag::S60 ],
    '6290!'                                     => [ 'Nokia', '6290', 'flag' => Flag::S60 ],
    '6600'                                      => [ 'Nokia', '6600', 'flag' => Flag::S60 ],
    '6630'                                      => [ 'Nokia', '6630', 'flag' => Flag::S60 ],
    '6650d!'                                    => [ 'Nokia', '6650 fold', 'flag' => Flag::S60 ],
    '6670'                                      => [ 'Nokia', '6670', 'flag' => Flag::S60 ],
    '6680'                                      => [ 'Nokia', '6680', 'flag' => Flag::S60 ],
    '6681'                                      => [ 'Nokia', '6681', 'flag' => Flag::S60 ],
    '6700s'                                     => [ 'Nokia', '6700 slide', 'flag' => Flag::S60 ],
    '6700s-1c'                                  => [ 'Nokia', '6700 slide', 'flag' => Flag::S60 ],
    '6708'                                      => [ 'Nokia', '6708', 'flag' => Flag::UIQ ],
    '6710s'                                     => [ 'Nokia', '6710 Navigator', 'flag' => Flag::S60 ],
    '6720c!'                                    => [ 'Nokia', '6720 classic', 'flag' => Flag::S60 ],
    '6730c!'                                    => [ 'Nokia', '6730 classic', 'flag' => Flag::S60 ],
    '6760s!'                                    => [ 'Nokia', '6760 slide', 'flag' => Flag::S60 ],
    '6788'                                      => [ 'Nokia', '6788', 'flag' => Flag::S60 ],
    '6788i'                                     => [ 'Nokia', '6788i', 'flag' => Flag::S60 ],
    '6790s-1b!'                                 => [ 'Nokia', '6790 Surge', 'flag' => Flag::S60 ],
    '6790s-1c!'                                 => [ 'Nokia', '6790 slide', 'flag' => Flag::S60 ],
    '7610'                                      => [ 'Nokia', '7610', 'flag' => Flag::S60 ],
    '7650'                                      => [ 'Nokia', '7650', 'flag' => Flag::S60 ],
    '7660'                                      => [ 'Nokia', '7660', 'flag' => Flag::S60 ],
    'Oro'                                       => [ 'Nokia', 'Oro', 'flag' => Flag::S60 ],
    'Panasonic-X700'                            => [ 'Panasonic', 'X700', 'flag' => Flag::S60 ],
    'Panasonic-X800'                            => [ 'Panasonic', 'X800', 'flag' => Flag::S60 ],
    'I7710'                                     => [ 'Samsung', 'GT-I7710', 'flag' => Flag::S60 ],
    'I8510'                                     => [ 'Samsung', 'INNOV8', 'flag' => Flag::S60 ],
    'I8910'                                     => [ 'Samsung', 'Omnia HD', 'flag' => Flag::S60 ],
    'SGH-D720'                                  => [ 'Samsung', 'D720', 'flag' => Flag::S60 ],
    'SGH-D728'                                  => [ 'Samsung', 'D728', 'flag' => Flag::S60 ],
    'SGH-D730'                                  => [ 'Samsung', 'D730', 'flag' => Flag::S60 ],
    'SGH-i400!'                                 => [ 'Samsung', 'i400', 'flag' => Flag::S60 ],
    'SGH-i408!'                                 => [ 'Samsung', 'i408', 'flag' => Flag::S60 ],
    'SGH-i450!'                                 => [ 'Samsung', 'i450', 'flag' => Flag::S60 ],
    'SGH-i455!'                                 => [ 'Samsung', 'i455', 'flag' => Flag::S60 ],
    'SGH-i458!'                                 => [ 'Samsung', 'i458', 'flag' => Flag::S60 ],
    'SGH-i520!'                                 => [ 'Samsung', 'i520', 'flag' => Flag::S60 ],
    'SGH-i550!'                                 => [ 'Samsung', 'i550', 'flag' => Flag::S60 ],
    'SGH-i560!'                                 => [ 'Samsung', 'i560', 'flag' => Flag::S60 ],
    'SGH-i568!'                                 => [ 'Samsung', 'i568', 'flag' => Flag::S60 ],
    'SGH-i570!'                                 => [ 'Samsung', 'i570', 'flag' => Flag::S60 ],
    'SGH-G810'                                  => [ 'Samsung', 'G810', 'flag' => Flag::S60 ],
    'U'                                         => [ 'Sony Ericsson', 'Satio', 'flag' => Flag::S60 ],
    '(?i)U1(a|i|iv)?$!'                         => [ 'Sony Ericsson', 'Satio', 'flag' => Flag::S60 ],
    '(?i)U5(a|i|iv)?$!'                         => [ 'Sony Ericsson', 'Vivaz', 'flag' => Flag::S60 ],
    '(?i)U8(a|i)?$!'                            => [ 'Sony Ericsson', 'Vivaz Pro', 'flag' => Flag::S60 ],
    'ConstellationT'                            => [ 'Vertu', 'Constellation T', 'flag' => Flag::S60 ],
    'ConstellationQuest'                        => [ 'Vertu', 'Constellation Quest', 'flag' => Flag::S60 ],
];
