<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
include("include/post.php");

$key = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // KEY
$key_index = 1; // KEY_INDEX

$response = $_POST; // FETCH DATA FROM DEFINE METHOD, IN THIS EXAMPLE I AM DEFINING POST WHILE I AM SENDING REQUEST

$final_x_header = hash("sha256", "/pg/v1/status/" . $response['merchantId'] . "/" . $response['transactionId'] . $key) . "###" . $key_index;

$url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/" . $response['merchantId'] . "/" . $response['transactionId']; // <TESTING URL>

$headers = array(
  "Content-Type: application/json",
  "accept: application/json",
  "X-VERIFY: " . $final_x_header,
  "X-MERCHANT-ID:" . $response['merchantId']
);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);

curl_close($curl); // maybe commit

$responsePayment = json_decode($resp, true);
// HANDLE YOUR PHONEPAY RESPONSE
// echo '<pre>';
// print_r($responsePayment);
// echo '</pre>';
$transactionId = $responsePayment['data']['transactionId'];
$orderId = $responsePayment['data']['merchantTransactionId'];
$success = $responsePayment['success'];
$code = $responsePayment['code'];
$tmessage = $responsePayment['message'];
$merchantId = $responsePayment['data']['merchantId'];
$amount = rtrim($responsePayment['data']['amount'], "00");
$tstate = $responsePayment['data']['state'];
$responsecode = $responsePayment['data']['responseCode'];
$ttype = $responsePayment['data']['paymentInstrument']['type'];
$utrId = $responsePayment['data']['paymentInstrument']['utr'];
$cardtype = $responsePayment['data']['paymentInstrument']['cardType'];
$pgTransactionId = $responsePayment['data']['paymentInstrument']['pgTransactionId'];
$pgAuthorizationCode = $responsePayment['data']['paymentInstrument']['pgAuthorizationCode'];
$pgServiceTransactionId = $responsePayment['data']['paymentInstrument']['pgServiceTransactionId'];
$bankTransactionId = $responsePayment['data']['paymentInstrument']['bankTransactionId'];
$bankId = $responsePayment['data']['paymentInstrument']['bankId'];
$brn = $responsePayment['data']['paymentInstrument']['brn'];
$responseCodeDescription = $responsePayment['data']['responseCodeDescription'];
$paymentInstrument = $responsePayment['data']['paymentInstrument'];

mysqli_query($con, "INSERT INTO `transactions` (`transactionId`, `orderId`, `success`, `code`, `tmessage`, `merchantId`, `amount`, `tstate`, `responsecode`, `ttype`, `utrId`, `cardtype`, `pgTransactionId`, `pgAuthorizationCode`, `pgServiceTransactionId`, `bankTransactionId`, `bankId`, `brn`, `responseCodeDescription`, `paymentInstrument`) VALUES(
  '$transactionId',
  '$orderId',
  '$success',
  '$code',
  '$tmessage',
  '$merchantId',
  '$amount',
  '$tstate',
  '$responsecode',
  '$ttype',
  '$utrId',
  '$cardtype',
  '$pgTransactionId',
  '$pgAuthorizationCode',
  '$pgServiceTransactionId',
  '$bankTransactionId',
  '$bankId',
  '$brn',
  '$responseCodeDescription',
  '$paymentInstrument'
  );");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DigitalProjectHub.com</title>
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/cdntailwindcss.js"></script>
</head>

<body>

  <div class="bg-white p-6 flex flex-col justify-center h-screen md:mx-auto">
    <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
      <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
      </path>
    </svg>
    <div class="text-center">
      <h3 class="md:text-3xl mb-2 text-3xl text-gray-900 font-semibold text-center"><?php echo $responsePayment['message']; ?></h3>
      <b class="text-gray-600 my-4">Thank you! your payment of Rs <?php echo rtrim($responsePayment['data']['amount'], "00"); ?> Has been received.</b>
      <p> Have a great day! </p>
      <p class="text-center text-lg pt-3 font-light">Order ID : <?php echo $responsePayment['data']['merchantTransactionId']; ?> | Transaction ID : <?php echo $responsePayment['data']['transactionId']; ?></p>
      <p class="text-center text-xl text-medium pt-4 font-medium">Payment Details</p>

      <!-- project table start  -->
      <section class="mx-auto w-full max-w-xl py-4">
        <div class="mt-6 flex flex-col">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
              <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                      <td class="whitespace-nowrap px-4 py-4">
                        <div class="flex">
                          <div>
                            <div class="text-sm text-gray-700"><b>Transaction ID</b></div>
                          </div>
                        </div>
                      </td>
                      <td class="flex whitespace-nowrap px-12 py-4">
                        <div class="text-sm text-gray-700"><?php echo $responsePayment['data']['transactionId']; ?></div>
                      </td>

                    </tr>
                    <tr>
                      <td class="whitespace-nowrap px-4 py-4">
                        <div class="flex">
                          <div>
                            <div class="text-sm text-gray-700"><b>Order ID</b></div>
                          </div>
                        </div>
                      </td>
                      <td class="flex whitespace-nowrap px-12 py-4">
                        <div class="text-sm text-gray-700"><?php echo $responsePayment['data']['merchantTransactionId']; ?></div>
                      </td>

                    </tr>
                    <tr>
                      <td class="whitespace-nowrap px-4 py-4">
                        <div class="flex">
                          <div>
                            <div class="text-sm text-gray-700"><b>Payment Type</b></div>
                          </div>
                        </div>
                      </td>
                      <td class="flex whitespace-nowrap px-12 py-4">
                        <div class="text-sm text-gray-700"><?php echo $responsePayment['data']['paymentInstrument']['type']; ?></div>
                      </td>

                    </tr>
                    <tr>
                      <td class="whitespace-nowrap px-4 py-4">
                        <div class="flex">
                          <div>
                            <div class="text-sm text-gray-700"><b>Amount</b></div>
                          </div>
                        </div>
                      </td>
                      <td class="flex whitespace-nowrap px-12 py-4">
                        <div class="text-sm text-gray-700">₹ <?php echo rtrim($responsePayment['data']['amount'], "00"); ?> INR</div>
                      </td>

                    </tr>
                    <tr>
                      <td class="whitespace-nowrap px-4 py-4">
                        <div class="flex">
                          <div>
                            <div class="text-sm text-gray-700"><b>Download</b></div>
                          </div>
                        </div>
                      </td>
                      <td class="flex whitespace-nowrap px-12 py-4">
                        <a href="/" class="block relative rounded overflow-hidden">
                          <div class="text-sm text-gray-700"><button type="submit" class="inline-flex items-center justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                              <span class="block">Download</span>
                            </button></div>
                        </a>
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- project table end  -->


      <div class="flex flex-row mt-10 justify-center ">
        <a href="/" class="block relative rounded overflow-hidden">
          <button type="button" class="inline-flex items-center justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">

            <span class="block text-xs">Go Back</span> <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </a>
      </div>
    </div>
  </div>
  <!-- payment page -->

  <!--	Footer   start-->
  <!--	Footer   start-->


  <!-- Scroll to top -->
  <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
  <!-- End Scroll To top -->
</body>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {
    packages: ['annotatedtimeline']
  });
</script>

</html>