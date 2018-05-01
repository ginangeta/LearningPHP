<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains names(IP address,surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called feature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/
$user_information_samples="'66.249.72.240'.Chirchir,Olesaningo Mosiro.0760387482.KENYA.+254_
'192.168.170.25'.Wambua,Doe Mumbua.080023450.KENYA.+254_
'113.193.241.186'.Vonbora,Katherina Luther.0600990033.GERMANY.+32_
'197.176.231.200'.Boromir,Grommit Wallace.0100873901.IRELAND.+98_
'113.193.241.186'.Faramir,Edwards Jonathan.0200983729.AMERICA.+1_
'77.77.7.7'.Asaph,Aslan King.02990033.ISRAEL.+2_
'172.53.14.2'.Huan,Valinor Hound.02880023.SPAIN.+26_
'113.193.241.18'.Otoyo,Wafula Joel.0777799920.KENYA.+254_
'173.190.141.16'.Mapete,Mwambingu Simba.0987483292.TANZANIA.+257_
'153.193.241.186'.SARATON,DAVID BREINARD.043899292.AMERICA.+1_
'103.153.211.186'.Legolas,JOHN OWEN.074749292.ZAMBIA.+267_
'123.19.201.186'.Puddleglum,JOHN BUNYAN.09837328.UGANDA.+256_
'163.193.241.156'.Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32_
'150.133.10.23'.Beren,Luthien Lovi.028403323.SPAIN.+26_"

$info_array = explode(PHP_EOL, $user_information_samples);

$info_array_multi = array_map(
  function($v){
    return explode(',',$v);
  },$info_array);


    echo $info_array_multi;



 ?>
