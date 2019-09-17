<?php
$b="\033[1;34m";
$t="\033[92m";
$pu="\033[1;37m";
$p="\033[1;35m";
$r="\033[1;31m";
$k="\033[1;33m";

system ("clear");
sleep(2);
echo "
$t           [ AUTHOR: FUNT4STIC TUYULERS ]
$p                    [ SUPPORT ]
$t                      [NONAME]
$k                      [RCX]
$r                      [Vuji]
$pu                     [Ucritt]\n\n";
sleep(1);
echo "\n";
sleep(1);
echo "$r
[!] warning !!!
[-] ini adalah program ilegal
[-] resiko sepenuhnya di tanggung pengguna\n";
sleep(5);
system("clear");

$kode = readline("$p masukan password : ");
system("clear");

if ($kode == "NoName") {
    echo"sandi benar \n";
}

if ($kode == null){
    echo" harap isi sandi \n";
}

if ($kode != "NoName"){
    echo" [•]sandi salah Pm Wa: 082278103764 [•] \n";
    exit;
}

echo "\n";
echo " $t Loading \n";
sleep(1);
echo " $t Loading ° \n";
sleep(1);
echo " $t Loading ° ° \n";
sleep(1);
system ("clear");
echo "\n";

function request($url, $post = null, $cookies = null, $headers = null)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HEADER, 1);

    if (!is_null($headers))
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    if (!is_null($cookies))
        curl_setopt($ch, CURLOPT_COOKIE, $cookies);

    if (!is_null($post)) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }

    $resp       = curl_exec($ch);
    $header_len = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header     = substr($resp, 0, $header_len);
    $body       = substr($resp, $header_len);
    curl_close($ch);
    preg_match_all('#Set-Cookie: ([^;]+)#', $header, $d);
    $cookie = '';

    for ($o = 0; $o < count($d[0]); $o++) {
        $cookie .= $d[1][$o].";";
    }
    return [$header, $body, $cookie];
}

function getName()
{
    $names = array(
        'Diyan',
        'Indah',
        'Danis',
        'Pitra',
        'Rohmut',
        'Saruh',
        'Agustinak',
        'Jokko',
        'Cahayas',
        'Cinsa',
        'Tedju',
        'Adei',
        'Putris',
        'Pranotos',
        'Halimans',
        'Lanfun',
        'Sugonso',
        'Danan',
        'Kabeea',
        'Salampessys',
        'Esthtr',
        'Beringins',
        'Beulahs',
        'Jadibatas',
        'Selahs',
        'Berasas',
        'Megawatis',
        'Ekos'
    );
    $random_name = $names[mt_rand(0, sizeof($names) - 1)];
    return $random_name;
}

function getSurname()
{
    $surnames = array(
        'Wahyu',
        'Bima',
        'Hadimans',
        'Sudomos',
        'Dians',
        'Tedjas',
        'Iskandars',
        'Siyus',
        'Anggriawans',
        'Xiaosis',
        'Maaizs',
        'Fauds',
        'Nathans',
        'Rumasingaps',
        'Manassehs',
        'Bunuhajis',
        'Aquilas',
        'Pasaribus',
        'Sriwidadis',
        'Bambangs'
    );
    $random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];
    return $random_surname;
}

function randomPassword($length = 7)
{
    $characters       = 'qwertyuioipasdfghjklzxcvbnm0123456789';
    $charactersLength = strlen($characters);
    $randomString     = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getRandom($length = 7)
{
    $characters       = '0123456789';
    $charactersLength = strlen($characters);
    $randomString     = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$header = array(
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Host: newapp.gonixend.com',
    'Connection: Keep-Alive'
);

echo "$b  Kode reff kamu bangsat  = ";
$kodereff = trim(fgets(STDIN));
echo "$k mohon hidupkan mode pesawat dan matikan lagi agar ip berubah\n";

for ($i = 1; $i <= 1000; $i++) {
    sleep (rand(1,1));
    echo "\n";

    $namad    = getName();
    $namab    = getSurname();
    $number   = getRandom();
    $nama     = $namad.$namab;
    $username = $nama.$number;
    $email    = $username.'@gmail.com';
    $password = randomPassword();
    $url      = 'http://newapp.gonixend.com/api/v2/account.signUp.php';
    $data     = 'email='.$email.'&fullname='.$nama.'&clientId=1&password='.$password.'&username='.$username;
    $daftar   = request($url, $data, null, $header);
    $res      = json_decode($daftar[1]);

    if ($res->error_code == 0) {
        $accessToken = $res->accessToken;
        $accountId   = $res->accountId;
        $url2        = 'http://newapp.gonixend.com/api/v2/account.Refer.php';
        $data2       = 'data={"clientId":"1","accountId":"'.$accountId.'","accessToken":"'.$accessToken.'","user":"'.$username.'","name":"refer","value":"'.$kodereff.'","dev_name":"a'.getRandom().'f","dev_man":"Xiaomi","ver":"2.0","pckg":"com.goprix.app"}&';
        $reff        = request($url2, $data2, null, $header);
        $res2        = json_decode($reff[1]);

        if ($res->error_code == 0) {
            echo "$t SUKSESS\n";
            echo "$p SUBSCRIBE FUNT4STIC TUYULERS \n";
        } else {
            echo '[•]BANGSAT KAMU JELEK CVK DOI NYA KAGAK MAU[•]'.PHP_EOL;
        }
    } else {
        echo "$r GAGAL\n";
        echo "$t SUBSCRIBE FUNT4STIC TUYULERS \n";
    }
}
?>
