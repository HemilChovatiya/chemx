<?php
include('db.php');
$sql = "select * from login;";

// insert in database 
$rs = mysqli_query($con, $sql);

/*while($row = mysqli_fetch_assoc($rs))
		{
			echo $row['u_id'];
      echo $row['u_name'];
      echo $row['password'];
		}*/
  ?>



<html>
<head>
  <script src='https://cdn.tailwindcss.com/'></script>
</head>

<body>
  <!-- navbar -->
  <div class="bg-white">
    <div class="max-w-7xl mx-auto relative text-gray-700 body-font">
      <div class="container flex flex-col flex-wrap items-center justify-between py-5 md:flex-row">
        <a href="#_"
          class="flex items-center order-first font-medium text-gray-900 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center">
          <span class="text-xl font-black leading-none text-gray-900 select-none logo">Chem<span class="text-red-600">X</span>.</span>
        </a>
        <div class="relative flex flex-col md:flex-row items-center">
          <nav
            class="flex flex-wrap items-center pt-2 pb-2 pb-5 text-base border-b border-gray-200 md:pt-0 md:mb-0 md:border-b-0 md:pr-3 md:mr-3 md:border-r md:pb-0">
            <a href="#_"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Home</a>
            <a href="#_"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">How
              It Works</a>
            <a href="#_"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">About
              Us</a>
            <a href="#_"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Pricing</a>
            <a href="#_"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Faq</a>
            <a href="#_"
              class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900 secondary_text link-editable editable">Stats</a>
          </nav>
          <div class="inline-flex items-center justify-center ml-5 space-x-4 md:space-x-10 md:justify-end">
            <a href="/project/login/index.php"
              class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-red-600 secondary_text link-editable">Sign
              in</a>
            <a href="/project/login/index.php"
              class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 secondary_text btn-editable">Sign
              up</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-white">
    <div class="px-4 py-16 mx-auto sm:max-w-7xl md:max-w-7xl lg:max-w-7xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid gap-6 row-gap-10 lg:grid-cols-2" data-content="how-it-works">
        <div class="lg:py-6 lg:pr-16">
          <h2 class="mb-8 font-bold text-black text-4xl primary_text editable">How it works</h2>
          <div class="flex" data-subcontent="step_1">
            <div class="flex flex-col items-center mr-4">
              <div>
                <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                  <svg class="w-4 text-red-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                  </svg>
                </div>
              </div>
              <div class="w-px h-full bg-gray-300"></div>
            </div>
            <div class="pt-1 pb-8 w-full">
              <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Sign up
                for ChemX</p>
              <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Enter your
                company information to get started with ChemX.</p>
            </div>
          </div>
          <div class="flex" data-subcontent="step_2">
            <div class="flex flex-col items-center mr-4">
              <div>
                <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                  <svg class="w-4 text-red-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                  </svg>
                </div>
              </div>
              <div class="w-px h-full bg-gray-300"></div>
            </div>
            <div class="pt-1 pb-8 w-full">
              <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Get
                pricing feedback</p>
              <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Receive feedback
                from other companies in the chemical industry on the prices of your products.</p>
            </div>
          </div>
          <div class="flex" data-subcontent="step_3">
            <div class="flex flex-col items-center mr-4">
              <div>
                <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                  <svg class="w-6 text-red-600" stroke="currentColor" viewBox="0 0 24 24">
                    <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                  </svg>
                </div>
              </div>

            </div>
            <div class="pt-1 pb-0 w-full">
              <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Use
                ChemX to your advantage</p>
              <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Use the pricing
                feedback to adjust your own prices and stay competitive in the market.</p>
            </div>
          </div>
        </div>
        <div class="relative">
          <img class="inset-0 object-cover w-full rounded shadow-lg h-96 lg:absolute lg:h-full img-editable"
            src="/project/icons/scientist.svg" alt="chemicals">
          
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white">
    <div class="pt-12 pb-12 max-w-7xl mx-auto">
      <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex items-center -mx-3 sm:-mx-4">
              <div class="w-full xl:w-1/2 px-3 sm:px-4">
                <div class="py-3 sm:py-4">
                  <div class="relative">
                    <img src="/PROJECT/icons/projection.svg" alt=""
                      class="rounded-2xl w-full img-editable">
                    
                  </div>
                </div>
                <div class="py-3 sm:py-4">
                  <div class="relative">
                    <img src="/PROJECT/icons/realtimeanalytic.svg" alt=""
                      class="rounded-2xl w-full img-editable">
                    
                  </div>
                </div>
              </div>
              <div class="w-full xl:w-1/2 px-3 sm:px-4">
                <div class="my-4 z-10">
                  <div class="relative">
                    <img src="/PROJECT/icons/realtimecollaboration.svg" alt=""
                      class="rounded-2xl w-full img-editable">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
            <div class="mt-10 lg:mt-0">
              <span class="font-semibold text-base text-red-600 mb-2 block uppercase secondary_text editable">About
                Us</span>
              <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8 primary_text editable"
                data-content="website-headlines">ChemX- Chemical Inquiry and Pricing Feedback</h2>
              <p class="text-base text-gray-600 mb-8 secondary_text editable" data-content="about-us">ChemX is a
                chemical inquiry wholesaler industry pricing feedback.<br>ChemX targets people in the chemical inquiry
                wholesale industry that are looking to buy and sell chemicals, intermediates, and APIs. We provide a way
                to find suppliers who fit your needs by allowing you to get information on various prices of interest,
                request information on specific products, post a list of desired products or ask questions about
                them.<br>The ChemX website provides means for Internet users to engage with other web browsers and share
                information without disclosing identity or any personal data at all.<br>ChemX is part of Chemical
                Industry Information Council (CIIC). <br>It all started in 1999 when Chemical and Engineering News asked
                me to create ChemX for their website. In 2000 I registered the domain name for general use for
                commercial organizations and individuals.</p>
              <a href="#"
                class="py-3 px-10 inline-flex items-center justify-center text-center text-white text-base bg-red-600 hover:bg-red-700 hover:no-underline font-medium rounded-lg btn-editable editable">Get
                Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white py-10">
    <div class="max-w-7xl mx-auto py-4 px-4 bg-white sm:px-6 lg:px-8">
      <div class="text-center">
        <h2
          class="text-3xl font-extrabold text-gray-900 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-5xl primary_text editable">
          Pricing</h2>
        <p class="mt-6 max-w-4xl mx-auto text-xl text-gray-500 secondary_text editable"
          data-content="website-subheadlines">Chemical inquiry wholesaler industry pricing feedback</p>
      </div>
      <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3" data-content="pricing-features">
        <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col space-y-6">
          <div class="flex-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-red-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <div class="mt-4 flex items-baseline">
              <p class="text-5xl font-extrabold tracking-tight text-gray-900 primary_text editable">$19</p>
              <p class="ml-1 text-xl font-semibold text-gray-900 primary_text editable">/month</p>
            </div>
            <p class="mt-6 text-gray-500 text-base secondary_text editable" data-content="website-subheadlines">ChemX
              provides wholesale chemical inquiry and industry pricing feedback for the chemical inquiry process.</p>

            <hr class="my-6">

            <ul role="list" class="space-y-4">
              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Access
                  to over million products</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Inquire
                  about pricing for chemicals</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Get
                  feedback from the wholesaler industry</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Connect
                  with over 10,suppliers</p>
              </li>
            </ul>
          </div>

          <a href="#"
            class="bg-red-100 text-red-600 hover:bg-red-200 mt-8 block w-full py-3 px-6 border-0 rounded-md text-center font-medium transition-all btn-editable">Get
            Started</a>
        </div>

        <div class="
               relative
               p-8
               bg-white
               border border-gray-200
               rounded-2xl
               shadow-sm
               flex flex-col
               space-y-6
             ">
          <div class="flex-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-red-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
              </path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
              </path>
            </svg>

            <p class="
                   absolute
                   top-0
                   py-1.5
                   px-4
                   bg-red-600                  rounded-full
                   text-xs
                   font-semibold
                   uppercase
                   tracking-wide
                   text-white
                   transform
                   -translate-y-1/2 secondary_text bg-editable editable
                 ">
              Most popular
            </p>
            <div class="mt-4 flex items-baseline text-gray-900">
              <p class="text-5xl font-extrabold tracking-tight text-gray-900 primary_text editable">$29</p>
              <p class="ml-1 text-xl font-semibold text-gray-900 primary_text editable">/month</p>
            </div>
            <p class="mt-6 text-gray-500 text-base secondary_text editable" data-content="website-subheadlines">ChemX is
              the first chemical inquiry wholesaler industry pricing feedback service in the country.</p>

            <hr class="my-6">

            <!-- Feature list -->
            <ul role="list" class="space-y-4">
              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Access
                  to over million products</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Inquire
                  about pricing for chemicals</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Get
                  feedback from the wholesaler industry</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Connect
                  with over 10,suppliers</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Request
                  quotes and samples</p>
              </li>
            </ul>
          </div>
          <a href="#"
            class="bg-red-600 text-white hover:bg-red-700 mt-8 block w-full py-3 px-6 border-0 rounded-md text-center font-medium transition-all btn-editable">Get
            Started</a>
        </div>
        <div class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col space-y-6">
          <div class="flex-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-red-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
              </path>
            </svg>
            <div class="mt-4 flex items-baseline text-gray-900">
              <p class="text-5xl font-extrabold tracking-tight text-gray-900 primary_text editable">$49</p>
              <p class="ml-1 text-xl font-semibold text-gray-900 primary_text editable">/month</p>
            </div>
            <p class="mt-6 text-gray-500 text-base secondary_text editable" data-content="website-subheadlines">ChemX is
              an industry-specific wholesaler that provides pricing feedback to chemical companies.</p>

            <hr class="my-6">

            <!-- Feature list -->
            <ul role="list" class="space-y-4">
              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Access
                  to over million products</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Inquire
                  about pricing for chemicals</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Get
                  feedback from the wholesaler industry</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Connect
                  with over 10,suppliers</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Request
                  quotes and samples</p>
              </li>

              <li class="flex">
                <svg class="flex-shrink-0 w-6 h-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="ml-3 text-gray-500 text-base secondary_text w-full editable" data-subcontent="feature">Track
                  your orders and shipments</p>
              </li>
            </ul>
          </div>

          <a href="#"
            class="bg-red-100 text-red-600 hover:bg-red-200 mt-8 block w-full py-3 px-6 border-0 rounded-md text-center font-medium transition-all btn-editable">Get
            Started</a>
        </div>
      </div>
    </div>
  </div>














  <div class="px-4 pt-20 pb-24 mx-auto md:px-2 bg-white">
    <div class="max-w-6xl px-8 mx-auto lg:px-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-3xl primary_text editable">Frequently Asked Questions</h2>
      <div class="text-sm border-t border-b border-gray-200 divide-y divide-gray-200">
        <div class="faq is_retractable">
          <div
            class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none">
            <h4 class="secondary_text text-gray-900 text-base w-full editable" data-content="faq">What are the benefits
              of using ChemX</h4>
            <svg class="flex-none w-4 h-4 ml-4 transition transform" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" aria-hidden="true">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
          <p class="pb-5 pr-0 text-gray-700 secondary_text text-sm md:pr-40 editable" style="display:none"
            data-subcontent="faq-answers">We offer our users many benefits:</p>
        </div>
        <div class="faq is_retractable">
          <div
            class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none">
            <h4 class="secondary_text text-gray-900 text-base w-full editable" data-content="faq">What is the difference
              between ChemX and Clariant</h4>
            <svg class="flex-none w-4 h-4 ml-4 transition transform" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" aria-hidden="true">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
          <p class="pb-5 pr-0 text-gray-700 secondary_text text-sm md:pr-40 editable" style="display:none"
            data-subcontent="faq-answers">ChemX is the ultimate app for chemical inquiry wholesaling, providing curated
            industry price feedback. ChemX offers a fresh and unified data pool that is continually updated with current
            market prices and trends. You can use ChemX for your inquiries, or download information on product demand to
            help make sure you don't miss out on any deals.</p>
        </div>
        <div class="faq is_retractable">
          <div
            class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none">
            <h4 class="secondary_text text-gray-900 text-base w-full editable" data-content="faq">Does ChemX offer a
              digital catalog for members?</h4>
            <svg class="flex-none w-4 h-4 ml-4 transition transform" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" aria-hidden="true">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
          <p class="pb-5 pr-0 text-gray-700 secondary_text text-sm md:pr-40 editable" style="display:none"
            data-subcontent="faq-answers">No, we do not offer a digital catalog for members.</p>
        </div>
        <div class="faq is_retractable">
          <div
            class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none">
            <h4 class="secondary_text text-gray-900 text-base w-full editable" data-content="faq">How does ChemX work?
            </h4>
            <svg class="flex-none w-4 h-4 ml-4 transition transform" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" aria-hidden="true">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
          <p class="pb-5 pr-0 text-gray-700 secondary_text text-sm md:pr-40 editable" style="display:none"
            data-subcontent="faq-answers">ChemX is a wholesaler's inventory pricing and feedback, so you can see what
            your competitors are selling the same product for. ChemX is an app that you download on your computer or
            phone. Once you log in, it will give you basic information like the company and the name of the chemical.
            ChemX will also show all of our industry pricing, so it gives insights on which companies are undercutting
            our industry and which ones have higher prices</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full bg-red-50 sm:py-16 py-12 md:py-20 relative">
    <div class="max-w-7xl mx-auto px-10">
      <div class="flex flex-col mb-7 sm:mb-16 items-start md:items-center justify-center">
        <p class="sm:tracking-widest sm:text-base text-sm uppercase font-medium text-red-600 primary_text editable">
          What people are saying about us</p>
        <h2
          class="text-gray-900 mt-2 text-2xl sm:text-4xl tracking-tight font-bold sm:font-extrabold md:text-5xl dark:text-white primary_text editable">
          Don't just take our word for it.</h2>
      </div>
      <div class="grid grid-cols-4 sm:grid-cols-8 lg:grid-cols-12 gap-6 w-full">
        <div class="col-span-4 space-y-6">
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">John Robertson</p>
                <p class="font-medium text-gray-400 text-sm">Director of Sales at Workflow</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX is a great place for us to find where to buy chemicals. It's
              informative and easy to use."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Mike Samson</p>
                <p class="font-medium text-gray-400 text-sm">CEO at Blocknet</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX is a great site for chemists. They have an easier way to compare prices
              of different companies and products, which can be really helpful. I think ChemX is a must-have for any
              chemist."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Jack Bennington</p>
                <p class="font-medium text-sm text-gray-400">CTO at TNT Solutions</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX has been a huge help for us in terms of the pricing that we receive.
              They are committed to helping us remain competitive and offer our customers the best possible price."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
        </div>

        <div class="col-span-4 sm:block hidden space-y-5">
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Steve Mitchell</p>
                <p class="font-medium text-sm text-gray-400">CEO and Partner at Rakstation</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX has been a game changer for our company. I am sure we would not have
              grown this fast without it."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Ron Garrison</p>
                <p class="font-medium text-sm text-gray-400">Lead Developer at Devworks</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX is a lifesaver when it comes to pricing different materials. I have
              been using this app for over six months and can't imagine going back to the old system. I recommend ChemX
              to anyone who needs a quick answer."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Charlie Madocks</p>
                <p class="font-medium text-sm text-gray-400">Director of Marketing at Goji</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX has been a great resource for us. You can find the most up-to-date
              information on chemicals and quickly compare prices from all the major distributors. It saves time and
              money, which is essential in our industry."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
        </div>

        <div class="col-span-4 lg:block hidden space-y-5">
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Nick Thompson</p>
                <p class="font-medium text-sm text-gray-400">CTO at Craftyworks</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX is a reliable source for all my chem needs. They provide good pricing
              and an instant quote system that saves time."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Jake Walters</p>
                <p class="font-medium text-sm text-gray-400">CFO at Edgeworks</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX is a great company to work with and we really appreciate their pricing.
              We used to manually check the prices of our competitor's products and ChemX has made it so much easier."
            </p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
          <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
            <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
              <img src="/project/icons/log.png"
                class="object-cover is_avatar rounded-full mr-3 w-12 h-12 img-editable">
              <div class="relative">
                <p class="font-semibold text-gray-600 leading-none my-1">Sam Robinson</p>
                <p class="font-medium text-sm text-gray-400">Lead Developer at Socnet</p>
              </div>
            </div>
            <p class="text-gray-500 z-10 leading-6 text-base relative bg-transparent shadow-none p-0"
              data-content="testimonials">"ChemX is an excellent wholesaler for my chemical inquiry. I have found that
              their prices are lower than the competition, and they offer a discount to their customers when they order
              by phone. It's a win-win."</p>
            <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-red-300" fill="currentColor"
              viewBox="0 0 32 32" aria-hidden="true">
              <path
                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
              </path>
            </svg>
          </div>
        </div>

      </div>
    </div>
    <div class="bg-gradient-to-t from-red-50 h-96 w-full bottom-0 left-0 absolute z-20 flex items-end justify-center">
    </div>
  </div>
  <div class="bg-white">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid grid-cols-2 row-gap-8 md:grid-cols-4">
        <div class="text-center md:border-r">
          <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-gray-900 primary_text editable">144K</h6>
          <p
            class="mt-2 text-sm font-medium tracking-widest text-gray-500 uppercase lg:text-base secondary_text editable">
            Downloads
          </p>
        </div>
        <div class="text-center md:border-r">
          <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-gray-900 primary_text editable">12.9K</h6>
          <p
            class="mt-2 text-sm font-medium tracking-widest text-gray-500 uppercase lg:text-base secondary_text editable">
            Subscribers
          </p>
        </div>
        <div class="text-center md:border-r">
          <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-gray-900 primary_text editable">48.3K</h6>
          <p
            class="mt-2 text-sm font-medium tracking-widest text-gray-500 uppercase lg:text-base secondary_text editable">
            Users
          </p>
        </div>
        <div class="text-center">
          <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-gray-900 primary_text editable">24.5K</h6>
          <p
            class="mt-2 text-sm font-medium tracking-widest text-gray-500 uppercase lg:text-base secondary_text editable">
            Cookies
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white">
    <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
      <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl primary_text editable"
        data-content="cta">Sell your chemicals to ChemX</h2>
      <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white sm:text-4xl mt-1 primary_text editable">
        Start your 14-day free trial
      </h2>
      <p class="text-xl mt-4 max-w-md mx-auto text-gray-400 secondary_text editable"
        data-content="website-subheadlines">ChemX provides chemical inquiry wholesaler industry pricing feedback,
        helping to keep your business competitive.</p>
      <div class="lg:mt-0 lg:flex-shrink-0">
        <div class="mt-12 inline-flex">
          <button type="button"
            class="py-3 px-6 bg-red-600 hover:bg-red-700 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md shadow secondary_text btn-editable editable">Start
            free trial</button>
        </div>
      </div>
    </div>
  </div>
  <div class="relative w-full bg-white">
    <div class="relative items-center justify-center w-full overflow-x-hidden lg:pb-32 sm:pt-8 md:pt-12">
      <div class="container flex flex-col items-center justify-between h-full max-w-7xl px-10 mx-auto lg:flex-row">
        <div
          class="z-30 flex flex-col items-center w-full max-w-xl text-left lg:items-start lg:w-1/2 lg:pt-24 lg:text-left">
          <h1 class="relative mb-4 text-5xl font-black leading-tight text-black lg:pr-16 lg:mb-8 primary_text editable"
            data-content="website-headlines">Price Discovery for Chemical Wholesalers</h1>
          <p class="pr-12 mb-8 text-lg text-gray-600 lg:pr-20 secondary_text editable"
            data-content="website-subheadlines"><span class="placeholder medium"></span></p>
          <a href="#"
            class="relative self-start inline-block w-auto px-8 py-3 mt-0 text-base text-white bg-red-600 hover:bg-red-700 rounded-md shadow-xl sm:mt-1 font-semibold lg:mx-0 btn-editable"><span
              class="editable">Start Free Trial</span></a>
          <div class="flex-col hidden mt-12 sm:flex lg:mt-24">
            <p class="mb-4 text-sm font-medium tracking-widest text-gray-500 uppercase editable">Integrates With</p>
            <div class="flex">
              <svg
                class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                viewBox="0 0 2499 1037" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1">
                  <g>
                    <path
                      d="M261.062 466.768c-53.833-19.912-83.335-35.399-83.335-59.735 0-20.652 16.963-32.45 47.201-32.45 55.31 0 112.09 21.388 151.178 40.559l22.124-136.427c-30.973-14.752-94.397-39.088-182.151-39.088-61.947 0-113.573 16.223-150.443 46.46-38.352 31.71-58.263 77.434-58.263 132.744 0 100.293 61.211 143.07 160.769 179.203 64.159 22.86 85.547 39.088 85.547 64.16 0 24.336-20.652 38.346-58.263 38.346-46.46 0-123.153-22.86-173.302-52.356L0 786.087c42.771 24.337 122.417 49.409 205.017 49.409 65.63 0 120.204-15.487 157.08-44.984 41.293-32.45 62.682-80.381 62.682-142.328 0-102.511-62.683-145.282-163.717-181.416zm523.877-80.387l22.124-135.692H690.265V85.966l-157.035 25.84-22.677 138.883-55.232 8.96-20.675 126.732h75.68v266.227c0 69.32 17.7 117.257 53.833 146.754 30.238 24.336 73.745 36.134 134.956 36.134 47.196 0 75.957-8.109 95.868-13.275V678.416c-11.062 2.953-36.133 8.114-53.097 8.114-36.134 0-51.62-18.435-51.62-60.47V386.38h94.673zm350.752-143.618c-51.62 0-92.92 27.102-109.142 75.775l-11.062-67.849H855.459v573.745h182.887V452.017c22.865-28.026 55.31-38.159 99.558-38.159 9.59 0 19.911 0 32.45 2.213V247.188c-12.539-2.948-23.6-4.425-34.663-4.425zm171.095-48.86c53.098 0 95.869-43.507 95.869-96.604 0-53.839-42.771-96.61-95.869-96.61-53.838 0-96.609 42.771-96.609 96.61 0 53.097 42.771 96.604 96.61 96.604zm-92.184 56.786h183.628v573.745h-183.628V250.689zm703.999 51.62c-32.45-42.035-77.434-62.682-134.956-62.682-53.097 0-99.558 22.124-143.07 68.584l-9.585-57.522h-160.769v786.134l182.893-30.232V822.22c28.02 8.85 56.78 13.275 82.594 13.275 45.725 0 112.096-11.798 163.717-67.843 49.408-53.839 74.485-137.168 74.485-247.052 0-97.345-18.44-171.09-55.31-218.291zm-151.92 353.983c-14.75 28.025-37.61 42.777-64.159 42.777-18.435 0-34.662-3.69-49.408-11.062V415.142c30.973-32.445 58.993-36.134 69.32-36.134 46.46 0 69.32 50.15 69.32 148.23 0 56.045-8.11 99.557-25.073 129.054zm731.566-123.894c0-91.443-19.912-163.717-59-214.602-39.822-51.62-99.557-78.169-175.514-78.169-155.608 0-252.212 115.044-252.212 299.408 0 103.247 25.808 180.68 76.692 230.089 45.725 44.248 111.361 66.372 196.168 66.372 78.169 0 150.442-18.435 196.167-48.673l-19.912-125.365c-44.989 24.336-97.345 37.61-156.344 37.61-35.398 0-59.734-7.378-77.434-22.864-19.175-16.223-30.237-42.771-33.921-80.382h303.097c.736-8.85 2.213-50.15 2.213-63.424zm-306.787-48.672c5.16-81.859 27.284-120.205 69.32-120.205 41.3 0 62.688 39.087 65.636 120.205H2191.46z">
                    </path>
                  </g>
                </g>
              </svg>
              <svg
                class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                viewBox="0 0 2350 2315" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1"></g>
                <g>
                  <path
                    d="M1175 0C525.8 0 0 525.8 0 1175c0 552.2 378.9 1010.5 890.1 1139.7-5.9-14.7-8.8-35.3-8.8-55.8v-199.8H734.4c-79.3 0-152.8-35.2-185.1-99.9-38.2-70.5-44.1-179.2-141-246.8-29.4-23.5-5.9-47 26.4-44.1 61.7 17.6 111.6 58.8 158.6 120.4 47 61.7 67.6 76.4 155.7 76.4 41.1 0 105.7-2.9 164.5-11.8 32.3-82.3 88.1-155.7 155.7-190.9-393.6-47-581.6-240.9-581.6-505.3 0-114.6 49.9-223.3 132.2-317.3-26.4-91.1-61.7-279.1 11.8-352.5 176.3 0 282 114.6 308.4 143.9 88.1-29.4 185.1-47 284.9-47 102.8 0 196.8 17.6 284.9 47 26.4-29.4 132.2-143.9 308.4-143.9 70.5 70.5 38.2 261.4 8.8 352.5 82.3 91.1 129.3 202.7 129.3 317.3 0 264.4-185.1 458.3-575.7 499.4 108.7 55.8 185.1 214.4 185.1 331.9V2256c0 8.8-2.9 17.6-2.9 26.4C2021 2123.8 2350 1689.1 2350 1175 2350 525.8 1824.2 0 1175 0z">
                  </path>
                </g>
              </svg>
              <svg
                class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                viewBox="0 0 2500 2158" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1">
                  <g transform="translate(-.157)">
                    <path
                      d="M2498.932 499.093c-11.204 242.78-181.152 575.201-509.837 997.268-339.895 440.74-627.499 661.11-862.808 661.11-145.67 0-268.924-134.462-369.776-403.39l-201.693-739.547C480.115 745.61 399.81 611.145 313.904 611.145c-18.675 0-84.04 39.219-196.095 117.656L.155 577.53a31955.67 31955.67 0 00364.171-324.952C528.669 110.644 651.928 35.944 734.1 28.472c194.224-18.675 313.746 113.921 358.567 397.786 48.556 306.277 82.172 496.767 100.845 571.47 56.027 253.986 117.656 380.98 184.887 380.98 52.29 0 130.73-82.172 235.311-246.516 104.584-164.345 160.609-289.47 168.078-375.376 14.94-141.934-41.085-212.9-168.078-212.9-59.762 0-121.392 13.075-184.887 39.219C1552.082 183.48 1787.393-10.745 2134.757.462c257.721 7.471 379.113 173.683 364.17 498.635l.005-.004z">
                    </path>
                  </g>
                </g>
              </svg>
              <svg
                class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                viewBox="0 0 680 680" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1">
                  <g transform="translate(-401 -701)">
                    <g transform="translate(-293 -236)">
                      <g transform="translate(463 909)">
                        <g transform="translate(0 28)">
                          <g transform="translate(229.885)">
                            <path
                              d="M242.088 0c-36.478.027-66 29.582-65.973 66-.027 36.418 29.522 65.973 66 66h66V66.027C308.142 29.608 278.593.054 242.088 0c.027 0 .027 0 0 0zm.23 175H66.912c-36.365.027-65.824 29.576-65.797 65.987-.054 36.41 29.405 65.96 65.77 66.013h175.433c36.366-.027 65.824-29.576 65.797-65.987.027-36.437-29.431-65.986-65.797-66.013zM681.115 240.987c.027-36.411-29.522-65.96-66-65.987-36.478.027-66.027 29.576-66 65.987V307h66c36.478-.027 66.027-29.576 66-66.013zm-175 .214V65.772C506.142 29.506 476.614.054 440.13 0c-36.486.027-66.04 29.48-66.014 65.772v175.429c-.054 36.293 29.501 65.745 65.987 65.799 36.485-.027 66.04-29.48 66.013-65.8zM440.115 680c36.478-.027 66.027-29.582 66-66 .027-36.418-29.522-65.973-66-66h-66v66c-.027 36.392 29.522 65.946 66 66zm-.23-175h175.433c36.366-.027 65.824-29.576 65.797-65.987.054-36.41-29.404-65.96-65.77-66.013H439.912c-36.366.027-65.824 29.576-65.797 65.987-.027 36.437 29.405 65.986 65.77 66.013zM1.115 439c-.027 36.418 29.522 65.973 66 66 36.478-.027 66.027-29.582 66-66v-66h-66c-36.478.027-66.027 29.582-66 66zm175-.249v175.444c-.054 36.296 29.501 65.751 65.987 65.805 36.485-.027 66.04-29.482 66.013-65.778V438.805c.054-36.296-29.501-65.751-65.986-65.805-36.513 0-66.04 29.455-66.014 65.751 0 0 0 .027 0 0z">
                            </path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              <svg
                class="h-8 mr-4 text-gray-500 duration-150 cursor-pointer fill-current transition-color hover:text-gray-600"
                viewBox="0 0 1681 417" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1">
                  <g>
                    <path
                      d="M1621.33 306.03l.578.008c34.43 0 58.659-23.855 58.924-57.992.126-16.904-4.757-32.38-13.753-43.558-9.512-11.834-22.829-18.142-38.516-18.267h-.313c-21.17 0-40.83 16.062-60.1 49.112l-1.533 2.638-.984-2.875c-4.866-14.163-9.2-25.963-11.791-33.025-1.817-4.925-2.617-7.138-2.809-7.854-.925-3.575-3.979-5.796-7.987-5.796-2.463 0-5.08.837-7.554 2.412-2.455 1.563-3.825 3.471-4.317 6.021l-.125.383c-19.287 60.155-35.188 89.359-48.662 89.359-1.959-.017-3.492-.654-4.634-1.93-3.529-3.9-2.662-13.174-1.462-26.016.879-9.433 1.883-20.112 1.466-31.446-.791-21.787-12.716-34.87-31.879-35.012-24.358-.009-40.141 25.933-47.412 41.395l-2.171 4.609-.48-5.083c-1.816-19.134-8.237-41.988-28.512-42.138-23.65 0-41.667 27.75-52.658 51.042l-2.946 6.241.292-6.891c1.304-31.063 2.375-49.404 3.187-54.492.8-5.104.38-8.53-1.292-10.492-1.583-1.837-4.566-2.516-8.941-2.241-7.571.479-11.442 5.087-17.271 20.533-9.575 25.367-33.93 84.383-53.375 84.383-3.858-.029-6.912-1.341-9.15-3.912-8.154-9.346-4.892-34.621-.38-69.592l.342-2.646c2.138-16.558-1.504-20.091-10.5-21.745a15.487 15.487 0 00-2.733-.267c-7.183 0-10.541 6.879-17.25 25.996-11.937 34.016-27.291 69.791-45.241 69.791-.659 0-1.305-.05-1.967-.154-9.513-1.62-9.304-15.729-9.042-33.608.134-9.667.296-20.63-1.191-30.525-2.684-17.758-13.142-28.846-27.313-28.958-28.267 0-47.33 36.2-56.196 57.783l-2.008 4.883-.671-5.242a486.444 486.444 0 01-3.43-41.729l-.024-.52.32-.409c52.905-66.596 76.647-114.654 76.963-155.829.204-26.304-11.933-42.104-32.462-42.267-15.013 0-50.705 12.505-63.109 128.321a669.633 669.633 0 00-3.75 65.45l-.008.434-.246.35c-24.204 35.033-75.862 95.295-126.437 95.295-45.696 0-82.154-36.97-82.154-102.229 0-87.483 61.92-141.196 108.52-141.196h.388c10.125.075 18.808 2.904 25.108 8.18 6.542 5.474 9.971 13.15 9.9 22.191-.091 12.08-4.029 18.288-7.833 24.284-.971 1.545-1.95 3.079-2.842 4.704-.9 1.641-1.72 4.02-.525 6.058 1.225 2.087 4.354 3.4 8.167 3.43 11.091 0 27.866-16.06 28.05-40.25.192-25.322-21.138-51.413-59.192-51.413-57.587 0-135.15 63.266-135.15 165.8 0 72.529 45.475 122.658 107.075 122.658 43.713 0 86.954-31.3 125.25-83.58l2.346-3.166.167 3.934c.812 19.137 2.2 34.212 3.212 45.224.654 7.08 1.13 12.192 1.113 15.013-.05 6.18.954 10.48 3.091 13.112 2.13 2.638 5.513 3.884 10.646 3.917 8.6 0 10.325-5.862 13.73-20.329l.978-4.13c4.234-17.528 19.867-74.745 43.38-74.745 3.841.037 6.804 1.17 8.908 3.4 5.192 5.508 4.625 16.813 3.967 29.908-.417 8.171-.834 16.609-.017 24.83 2.213 22.191 11.796 33.045 29.292 33.17 17.966.009 36.716-19.346 46.612-37.329l1.867-3.387.729 3.808c1.825 9.625 9.992 41.217 35.563 41.217 23.175 0 43.058-24.404 64.85-74.634l2.854-6.558-.175 7.154c-.463 19.034-1.492 42.275-1.5 60.246-.009 13.9 1.396 19.204 7.82 19.204l1.459.067c6.162 0 10.346-3.68 12.433-10.954 16.4-57.155 30.571-83.771 44.613-83.771 13.75.104 15.037 25.246 16.141 69.67l.075 3.117c.334 15.538.896 22.413 10.546 22.484 7.325 0 9.146-5.755 12.934-19.921.725-2.7 1.508-5.663 2.437-8.863 13.242-45.937 24.217-64.679 37.883-64.679 11.7.088 12.35 12.15 12.567 16.113.45 8.487-.425 17.375-1.267 25.954-.787 7.975-1.596 16.225-1.291 23.887.716 17.967 10.55 27.938 27.7 28.067 22.258 0 42.35-26.033 59.946-77.358l1.22-3.575 1.396 3.52c3.196 8.067 7.354 18.988 11.2 32.017l.146.496-.213.47c-17.041 37.834-29.062 79.976-29.233 102.493-.229 29.654 13.188 48.925 34.184 49.087h.362c11.42 0 38.042-4.587 38.558-47.02.213-17.392-3.9-41.984-12.204-73.105l-.954-3.563 3.063 2.042c10.637 7.038 22.591 10.8 34.616 10.9zm-573.697-143.913c.475-10.634 1.371-20.988 2.642-30.78 8.242-63.091 25.433-107.15 41.83-107.15h.074c7.817.059 11.725 5.971 11.646 17.563-.225 28.487-18.275 69.27-53.642 121.217l-2.766 4.066.216-4.916zm522.804 226.82c-2.608 3.476-6.241 5.238-10.791 5.238-5.225-.046-9.15-1.863-11.821-5.433-7.483-9.996-5.375-33.496 6.833-76.15a370.41 370.41 0 014.717-15.234l1.417-4.254 1.245 4.304c14.221 49.238 17.046 80.03 8.4 91.53zm4.426-126.145l-.259-.471-.516-1.638.241-.487c16.217-33.417 34.8-52.571 50.967-52.571h.167c18.258.137 30.883 16.57 30.708 39.942-.121 15.6-7 24.583-12.742 29.37-6.554 5.467-15.283 8.592-23.95 8.592-21.367-.162-36.033-12.458-44.617-22.737zM540.55 300.504c25.033-2 44.892-36.046 52.267-50.596l1.9-3.75.72 4.142c3.542 20.458 14.671 54.833 49.484 55.108h.291c15.059 0 32.142-9.212 49.409-26.633l1.267-1.28.92 1.538c11.625 19.442 27.217 29.771 43.817 28.921 24.438-1.27 39.27-18.587 40.575-30.617.333-3.066-.475-5.954-2.23-7.9-2.195-2.45-5.387-2.733-7.728-.487l-1.121 1.058c-5.688 5.463-16.288 15.642-27.838 16.242-14.141.692-24.6-7.762-31.358-25.212l-.28-.734.476-.616c38.887-50.863 66.175-128.471 63.479-180.525-1.242-24.092-8.246-52.813-34.558-52.813l-1.963.05c-10.079.52-19.246 5.325-27.241 14.27-24.413 27.313-37.188 94.538-32.55 171.267.958 15.942 3.729 30.842 8.225 44.271l.254.754-.513.609c-14.429 16.862-28.667 26.15-40.091 26.15-27.488 0-26.563-46.092-24.392-84.309.47-8.241 1.167-13.491-1.271-16.475-1.742-2.137-4.658-3.191-8.908-3.225l-.496-.004c-9.784 0-11.83 2.013-16.833 16.53-10.413 30.158-30.967 80.77-51.642 80.77-5.73-.054-10.104-2.008-13.1-5.825-10.03-12.8-2.413-44.725 3.704-70.387 1.1-4.613 2.154-9.042 3.058-13.142 1.338-6.083.93-10.52-1.22-13.208-2.159-2.68-6.463-3.763-12.142-3.313-8.854.709-14.517 4.417-17.254 21.254l-.55 3.5-2.059-2.491c-3.866-5.708-11.404-12.508-25.4-12.508-1.225 0-2.495.05-3.808.154-14.933 1.225-31.938 11.629-44.383 27.158-14.53 18.13-21.471 41.075-19.538 64.62.1 1.247.28 2.442.459 3.63l.1.654-.45.496c-8.692 9.467-17.55 14.275-26.326 14.275-13.545-.1-21.316-10.167-21.316-26.938 0-28.225 19.129-113.32 19.129-144.125 0-32.783-14.608-50.629-39.975-50.825h-.383c-37.042 0-65.909 42.03-93.534 128.505a1413.034 1413.034 0 00-7.641 24.975l-3.88 13.004 1.146-13.517a1682.328 1682.328 0 005.238-87.112c1.375-41.792-4.271-68.688-17.275-82.221-7.013-7.3-16.288-10.896-28.371-10.988h-.308c-45.325 0-67.038 76.442-82.85 130.38-4.771 16.283-14.175 53.012-20.454 78.12l3.72-6.046c2.788-31.616 10.867-110.812 10.338-153.779-.575-46.091-15.917-66.754-49.771-67.012h-.417c-18.083 0-30.629 8.987-37.966 16.525C7.358 52.92.017 70.604.425 85.875c.25 9.283 5.946 17.546 10.262 17.546 2.813 0 4.371-3.754 5.046-5.992 10.475-34.62 24.03-51.454 41.421-51.454 7.213.054 12.583 2.18 16.6 6.5 13.592 14.58 11.117 53.946 6.638 125.417-1.45 23.033-3.084 49.129-4.463 78.816-.24 4.899-.527 9.795-.858 14.688-1.321 20.612-2.371 36.904 5.45 38.116 10.175 1.588 16.796-2.545 20.187-12.612 5.025-14.942 16.296-55.78 38.105-130.4 20.925-71.608 36.733-97.662 56.958-97.662 23.367 0 25.108 40.12 20.825 124.787-.913 17.95-2.133 38.28-3.071 60.4-.13 3.108-.275 6.125-.425 9.025-.9 18.32-1.608 32.767 3.625 38.308 1.633 1.725 3.85 2.58 6.787 2.596 10.13 0 13.175-8.879 18.221-23.6.892-2.596 1.838-5.37 2.892-8.27 34.708-95.746 60.37-178.817 94.817-178.817 10.329 0 18.37 8.391 18.37 24.758 0 37.78-18.475 110.775-18.475 147.792 0 13.262 3.817 25.162 11.026 33.529 7.4 8.591 17.754 13.166 29.941 13.27h.267c11.525 0 23.529-5.6 35.696-16.641l1.141-1.033.917 1.237c8.012 10.767 20.938 16.554 34.896 15.48 21.408-1.667 39.37-20.73 46.054-38.705l1.308-3.517 1.304 3.517c4.967 13.338 15.709 29.413 38.663 27.55zM737.817 50.33l.366-.008c2.446 0 4.596 1.225 6.38 3.65 8.5 11.492 8.629 53.437-5.992 101.162-8.354 27.275-19.592 53.042-32.484 74.504l-2.058 3.417-.525-3.954c-1.517-11.542-2.267-23.558-2.792-33.783-3.729-72.138 18.092-144 37.105-144.988zM500.283 218.925c-7.491 30.146-21.858 66.537-47.762 68.62l-2.108.088c-10.746 0-16.771-7.033-17.909-20.916-1.425-17.367 6.063-37.704 19.071-51.825 8.28-8.992 17.62-13.942 26.3-13.942h.175c10.954.083 18.633 8.88 22.162 17.083l.188.425-.117.467zm120.146-110.52c-9.562 0-17.283 7.532-17.358 16.795-.075 9.33 7.6 16.98 17.1 17.05l.137 1.387v-1.387c9.425 0 17.142-7.53 17.217-16.787.075-9.334-7.596-16.984-17.096-17.059zm601.221 0c-9.563 0-17.28 7.532-17.358 16.795-.075 9.33 7.596 16.98 17.1 17.05l.133 1.387v-1.387c9.433 0 17.15-7.53 17.225-16.787.067-9.334-7.6-16.984-17.1-17.059z">
                    </path>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="relative flex flex-col items-end justify-center w-full h-full lg:w-1/2 lg:pl-10">
          <div class="container relative left-0 w-full max-w-4xl lg:absolute lg:w-screen">
            <img src="/project/icons/metric.svg"
              class="w-full h-auto mt-20 mb-20 ml-0 shadow-2xl rounded-xl lg:mb-0 lg:h-full xl:-ml-12 img-editable">
           
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="bg-white">
    <div class="pt-16 mx-auto max-w-7xl">
      <div class="flex flex-wrap items-start justify-between pb-6">
        <a href="#_" class="flex order-first font-medium text-gray-900 lg:order-none lg:w-auto title-font">
          <span class="text-xl font-black leading-none text-gray-900 select-none logo">ChemX<span
              class="text-red-600">.</span></span>
        </a>
        <div class="grid w-full grid-cols-2 mt-20 sm:grid-cols-4 gap-y-16 lg:gap-x-8 md:w-5/6 md:mt-0 md:pr-6">
          <div class="md:justify-self-end">
            <h3 class="font-semibold text-black primary_text">Product</h3>
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Features</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Integrations</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Documentation</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Pricing</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="md:justify-self-end">
            <h3 class="font-semibold text-black primary_text">About</h3>
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Our Story</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Company</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Our Team</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Work With Us</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="md:justify-self-end">
            <h3 class="font-semibold text-black primary_text">Resources</h3>
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Help Center</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Developer API</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Our Blog</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Status</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Sitemap</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="md:justify-self-end">
            <h3 class="font-semibold text-black primary_text">Contact</h3>
            <ul class="mt-6 space-y-4 text-sm">
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Advertising</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Press</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Partners</span>
                </a>
              </li>
              <li>
                <a href="#_" class="relative inline-block text-gray-600 group link-editable hover:text-red-600">
                  <span
                    class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-1"></span>
                  <span>Email</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="flex flex-col items-center justify-between py-10 border-t border-solid lg:flex-row border-gray">
        <ul class="flex flex-wrap space-x-5 text-xs">
          <li class="mb-6 text-center flex-full text-gray-600 lg:flex-none lg:mb-0">?? 2022 ChemX.</li>
          <li class="ml-6">
            <a href="#_" class="relative inline-block text-black group hover:text-red-600 link-editable">
              <span
                class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
              <span>Privacy Policy</span>
            </a>
          </li>
          <li class="ml-6">
            <a href="#_" class="relative inline-block text-black group hover:text-red-600 link-editable">
              <span
                class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
              <span>Disclaimers</span>
            </a>
          </li>
          <li class="ml-6">
            <a href="#_" class="relative inline-block text-black group hover:text-red-600 link-editable">
              <span
                class="absolute bottom-0 w-full transition duration-150 ease-out transform -translate-y-1 border-b border-black opacity-0 group-hover:opacity-100 group-hover:translate-y-0"></span>
              <span>Terms and Conditions</span>
            </a>
          </li>
        </ul>

        <ul class="flex items-center mt-10 space-x-5 lg:mt-0">
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900 link-editable">
              <span class="sr-only">Facebook</span>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900 link-editable">
              <span class="sr-only">Instagram</span>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-gray-900 link-editable">
              <span class="sr-only">Twitter</span>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                </path>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
 </body>

</html>