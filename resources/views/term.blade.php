@extends('layout.app')
@section('body')
<section class="w-full relative bg-primary h-auto lg:h-screen lg:px-24 pt-5 lg:py-7">
    <div class="px-6 lg:px-0">
        <x-partial.term />
    </div>
    <section class="mt-10  lg:my-28 lg:relative">
        <div class="w-full flex justify-center">
            <div class="text-center w-full mb-6 lg:mt-8">
                <h1 class="title-font sm:text-5xl text-3xl mb-5 font-bold text-white font-tvsan"> Term of Use
                </h1>
            </div>
        </div>
        <div class="w-full lg:absolute flex justify-center lg:translate-y-5">
          <div class="w-full lg:w-5/6 block lg:relative">
           <img class="absolute hidden lg:inline -top-12 -left-12 z-0" src="asset/red.png" alt="star shape">
           <img class="absolute hidden lg:inline -bottom-10 -right-12 z-0" src="asset/cream.png" alt="star shape">
            <article class="w-full lg:px-24 py-5 lg:py-16 bg-white lg:rounded-2xl lg:z-10 leading-10 block lg:flex lg:space-x-5 lg:relative">
             <nav class="hidden lg:inline w-1/6">
              <h1 class="text-lg font-semibold font-noto text-black">Introduction</h1>
              <ul class="space-y-4 text-sm text-tgrey capitalize">
               <li><a href="#intro" class="hover:text-primary">Introduction</a></li>
               <li><a href="#agreement" class="hover:text-primary">Agreement  to our Legal Terms</a></li>
               <li><a href="#service" class="hover:text-primary">Our Services</a></li>
               <li><a href="#right" class="hover:text-primary">Intellectual Property Rights</a></li>
               <li><a href="#represent" class="hover:text-primary">User Representation</a></li>
               <li><a href="#product" class="hover:text-primary">Products</a></li>
               <li><a href="#purchase" class="hover:text-primary">Purchases and Payment</a></li>
               <li><a href="#prohibit" class="hover:text-primary">Prohibited Activities</a></li>
               <li><a href="#contribution" class="hover:text-primary">User generated Contributions</a></li>
               <li><a href="#license" class="hover:text-primary">Contribution Licence</a></li>
               <li><a href="#mobile" class="hover:text-primary">Mobile Application Licence</a></li>
               <li><a href="#manage" class="hover:text-primary">Services Management</a></li>
               <li><a href="#terminate" class="hover:text-primary">Term and Termination</a></li>
               <li><a href="#modify" class="hover:text-primary">Modifications and Interruptions</a></li>
               <li><a href="#law" class="hover:text-primary">Governing Law</a></li>
               <li><a href="#dispute" class="hover:text-primary">Dispute Resolution</a></li>
               <li><a href="#correction" class="hover:text-primary">Corrections</a></li>
               <li><a href="#disclaimer" class="hover:text-primary">Disclaimer</a></li>
               <li><a href="#indemnification" class="hover:text-primary">Indemnification</a></li>
               <li><a href="#user" class="hover:text-primary">User Data</a></li>
               <li><a href="#miscellaneous" class="hover:text-primary">Miscellaneous</a></li>
               <li><a href="#contact" class="hover:text-primary">Contact Us</a></li>
              </ul>
             </nav>
             <div class="w-full lg:w-5/6 lg:overflow-y-scroll lg:h-[720px] overflow-y-hidden px-5 scroll">
                <div class="text-base font-noto text-tgrey" id="intro">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">INTRODUCTION</h1>
                  <p class="mt-5">
                    Welcome to Vmomas! We invite you to access this app and enjoy all our services.
                    Vmomas positions every mom to be financially stable, while also securing the financial stability of their children towards their adulthood. This app offers each mom a life-long mentorship for parenting, provides invaluable financial resources and tools, an expanded platform to connect and network with other moms around the globe. 
                  </p>

                  <p class="mt-3">
                    However, your use of this app is subject to your agreement with the terms of use and policies which describes your rights and our rights relating to the use of the Vmomas app.
                    Hence, we advise that you carefully review the terms. 
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="agreement">
                  <h1 class="font-bold text-black">AGREEMENT TO OUR LEGAL TERMS</h1>
                  <p class="mt-3">
                  We are Opulence Capital Investments Ltd (hereinafter referred to as 'Company', 'we', 'us', or 'our'). We operate the mobile application VMOMAS (hereinafter referred to as the 'App'), as well as any other related products and services that refer or link to these legal terms (hereinafter referred to as  'Legal Terms' or collectively, the 'Services').
                  </p>
                  <p class="mt-3">
                  These Legal Terms constitute a legally binding agreement made between you, whether personally or on behalf of an entity ('you'), and the company, concerning your access to and use of the Services. You agree that by accessing the Services, you have read, understood, and agreed to be bound by all of these Legal Terms. 
                  </p>

                  <h3 class="font-medium mt-4 text-gray-900">
                    IF YOU DO NOT AGREE WITH ALL OF THESE LEGAL TERMS, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SERVICES AND YOU MUST DISCONTINUE USE IMMEDIATELY.
                  </h3>
                  
                  <p class="mt-3">
                    Supplemental terms and conditions or documents that may be posted on the Services from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Legal Terms from time to time. We will alert you about any changes by updating the 'Last updated' date of these Legal Terms, and you waive any right to receive specific notice of each such change. It is your responsibility to periodically review these Legal Terms to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Legal Terms by your continued use of the Services after the date such revised Legal Terms are posted.
                  </p>
                </div>

                <div class="text-base font-noto text-tgrey mt-6" id="service">
                  <h1 class="font-bold text-black">1. OUR SERVICES</h1>
                  <p class="mt-3">
                    The information provided when using the Services is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be 
                    contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Services from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.
                  </p> 
                </div>

                <div class="text-base font-noto text-tgrey mt-6" id="right">
                  <h1 class="font-bold text-black">2. INTELLECTUAL PROPERTY RIGHTS</h1>
                  <p class="mt-3">
                    We are the owner or the licensee of all intellectual property rights in our Services, including all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics in the Services (collectively referred to as the 'Content'), as well as the trademarks, service marks, and logos contained therein (collectively referred to as the 'Marks').
                  </p> 
                  <p class="mt-3">
                    Our Content and Marks are protected by copyright and trademark laws (and various other intellectual property rights and unfair competition laws) and treaties in the United States, Canada and in Nigeria.
                  </p> 
                  <p class="mt-3">
                    The Content and Marks are provided in or through the Services 'AS IS' for your personal, non-commercial use or internal business purpose only.
                  </p> 
                  <p class="mt-3 font-bold text-black">
                    Your use of our Services
                  </p> 
                  <p class="mt-3">
                    Subject to your compliance with these Legal Terms, including the 'PROHIBITED ACTIVITIES' section below, we grant you a non-exclusive, non-transferable, revocable license to:
                  </p>
                  <ul class="list-disc mt-3 space-y-2 pl-8">
                    <li>access the Services;</li>
                    <li>and download or print a copy of any portion of the Content to which you have properly gained access.</li>
                  </ul>
                  <p class="mt-3">
                    solely for your personal, non-commercial use.
                  </p>
                  <p class="mt-3">
                    Except as set out in this section or elsewhere in our Legal Terms, no part of the Services and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.
                  </p>
                  <p class="mt-3">
                    If you wish to make any use of the Services, Content, or Marks other than as set out in this section or elsewhere in our Legal Terms, please address your request to: info@opulencecapitalinvestments.com. If we ever grant you the permission to post, reproduce, or publicly display any part of our Services or Content, you must identify us as the owners or licensors of the Services, Content, or Marks and ensure that any copyright or proprietary notice appears or is visible on posting, reproducing, or displaying our Content.
                  </p>
                  <p class="mt-3">
                    We reserve all rights not expressly granted to you in and to the Services, Content, and Marks.
                  </p>
                  <p class="mt-3">
                    Any breach of these Intellectual Property Rights will constitute a material breach of our Legal Terms and your right to use our Services will terminate immediately.
                  </p>
                  <p class="mt-3 font-bold text-black">
                    Your submissions
                  </p>
                  <p class="mt-3">
                   Please review this section and the 'PROHIBITED ACTIVITIES' section carefully prior to using our Services to understand the (a) rights you give us and (b) obligations you have when you post or upload any content through the Services.
                  </p>
                  <p class="mt-3">
                   <span class="font-mediun text-gray-900">Submissions:</span> By directly sending us any question, comment, suggestion, idea, feedback, or other information about the Services ('Submissions'), you agree to assign to us all intellectual property rights in such Submission. You agree that we shall own this Submission and be entitled to its unrestricted use and dissemination for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you.
                  </p>
                  <p class="mt-3">
                   <span class="font-mediun text-gray-900">You are responsible for what you post or upload: </span> sending us Submissions through any part of the Services you:
                  </p>
                  <ul class="list-disc mt-3 space-y-2 pl-8">
                    <li>
                      Confirm that you have read and agree with our 'PROHIBITED ACTIVITIES' and will not post, send, publish, upload, or transmit through the Services any Submission that is illegal, harassing, hateful, harmful, defamatory, obscene, bullying, abusive, discriminatory, threatening to any person or group, sexually explicit, false, inaccurate, deceitful, or misleading;
                    </li>
                    <li>to the extent permissible by applicable law, waive any and all moral rights to any such Submission;</li>
                    <li>
                      warrant that any such Submission are original to you or that you have the necessary rights and licenses to submit such Submissions and that you have full authority to grant us the above-mentioned rights in relation to your Submissions; and
                    </li>
                    <li>
                      warrant and represent that your Submissions do not constitute confidential information.
                    </li>
                  </ul>
                  <p class="mt-3">
                    You are solely responsible for your Submissions and you expressly agree to reimburse us for any and all losses that we may suffer because of your breach of (a) this section, (b) any third party’s intellectual property rights, or (c) applicable law.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="represent">
                  <h1 class="font-bold text-black">3. USER REPRESENTATIONS</h1>
                  <p class="mt-3">
                    By using the Services, you represent and warrant that: 
                  </p> 

                  <ul class="list-disc mt-3 space-y-2 pl-8">
                    <li>
                      You have the legal capacity and you agree to comply with these Legal Terms; 
                    </li>
                    <li>
                      You are not a minor in the jurisdiction in which you reside, or if a minor, you have received parental permission to use the Services;
                    </li>
                    <li>
                      You will not access the Services through automated or non-human means, whether through a bot, script or otherwise;
                    </li>
                    <li>
                      You will not use the Services for any illegal or unauthorised purpose; and 
                    </li>
                    <li>
                      Your use of the Services will not violate any applicable law or regulation.
                    </li>  
                  </ul>
                  <p class="mt-3">
                    If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Services (or any portion thereof).
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="product">
                  <h1 class="font-bold text-black">4. PRODUCTS</h1>
                  <p class="mt-3">
                   All products are subject to availability. We reserve the right to discontinue any products at any time for any reason. Prices for all products are subject to change.
                  </p>  
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="purchase">
                  <h1 class="font-bold text-black">5. PURCHASES AND PAYMENT</h1>
                  <p class="mt-3">
                    We accept the following forms of payment:
                  </p> 

                  <ul class="list-disc space-y-2 mt-3 pl-8">
                    <li>
                     Card
                    </li>
                    <li>
                      Bank Transfer
                    </li>
                    <li>
                      USSD
                    </li>  
                  </ul>
                  <p class="mt-3">
                    You agree to provide current, complete, and accurate purchase and account information for all purchases made via the Services. You further agree to promptly update account and payment information, including email address, payment method, and payment card expiration date, so that we can complete your transactions and contact you as needed. Sales tax will be added to the price of purchases as deemed required by us. We may change prices at any time. All payments shall be in Naira (N) and in USD ($).
                  </p>
                  <p class="mt-3">
                    You agree to pay all charges at the prices then in effect for your purchases with the vendors and any applicable shipping fees, and you authorize us to charge your chosen payment provider for any such amounts upon placing your order. We reserve the right to correct any errors or mistakes in pricing, even if we have already requested or received payment.
                  </p>
                  <p class="mt-3">
                    We reserve the right to refuse any order placed through the Services. We may, in our sole discretion, limit or cancel quantities purchased per person, per household, or per order. These restrictions may include orders placed by or under the same customer account, the same payment method, and/or orders that use the same billing or shipping address. We reserve the right to limit or prohibit orders that, in our sole judgement, appear to be placed by dealers, resellers, or distributors.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="prohibit">
                  <h1 class="font-bold text-black">6. PROHIBITED ACTIVITIES</h1>
                  <p class="mt-3">
                    You may not access or use the Services for any purpose other than that for which we make the Services available. The Services may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.
                  </p> 
                  <p class="mt-3">
                    As a user of the Services, you agree not to:
                  </p> 

                  <ul class="list-disc mt-3 space-y-2 mt-1 pl-8">
                    <li>
                     Systematically retrieve data or other content from the Services to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.
                    </li>
                    <li>
                      Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords.
                    </li>
                    <li>
                      Circumvent, disable, or otherwise interfere with security-related features of the Services, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Services and/or the Content contained therein.
                    </li>  
                    <li>
                      Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Services.
                    </li>  
                    <li>
                      Use any information obtained from the Services in order to harass, abuse, or harm another person.
                    </li>  
                    <li>
                      Make improper use of our support services or submit false reports of abuse or misconduct.
                    </li>  
                    <li>
                      Use the Services in a manner inconsistent with any applicable laws or regulations.
                    </li>  
                    <li>
                      Engage in unauthorized framing of or linking to the Services.
                    </li>  
                    <li>
                      Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Services or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Services.
                    </li>  
                    <li>
                      Engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools.
                    </li>  
                    <li>
                      Delete the copyright or other proprietary rights notice from any Content.
                    </li>  
                    <li>
                      Attempt to impersonate another user or person or use the username of another user.
                    </li>  
                    <li>
                      Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats ('gifs'), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as 'spyware' or 'passive collection mechanisms' or 'pcms').
                    </li>  
                    <li>
                      Interfere with, disrupt, or create an undue burden on the Services or the networks or services connected to the Services
                    </li>  
                    <li>
                     Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Services to you.
                    </li>  
                    <li>
                     Attempt to bypass any measures of the Services designed to prevent or restrict access to the Services, or any portion of the Services.
                    </li>  
                    <li>
                     Attempt to bypass any measures of the Services designed to prevent or restrict access to the Services, or any portion of the Services.
                    </li>  
                    <li>
                      Except as permitted by applicable law, decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Services.
                    </li>  
                    <li>
                     Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Services, or use or launch any unauthorised script or other software.
                    </li>  
                    <li>
                     Use a buying agent or purchasing agent to make purchases on the Services.
                    </li>  
                    <li>
                      Make any unauthorised use of the Services, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretences.
                    </li>  
                    <li>
                     Use the Services as part of any effort to compete with us or otherwise use the Services and/or the Content for any revenue-generating endeavour or commercial enterprise.
                    </li>  
                  </ul>
                  <p class="mt-3">
                    You agree to provide current, complete, and accurate purchase and account information for all purchases made via the Services. You further agree to promptly update account and payment information, including email address, payment method, and payment card expiration date, so that we can complete your transactions and contact you as needed. Sales tax will be added to the price of purchases as deemed required by us. We may change prices at any time. All payments shall be in Naira (N) and in USD ($).
                  </p>
                  <p class="mt-3">
                    You agree to pay all charges at the prices then in effect for your purchases with the vendors and any applicable shipping fees, and you authorize us to charge your chosen payment provider for any such amounts upon placing your order. We reserve the right to correct any errors or mistakes in pricing, even if we have already requested or received payment.
                  </p>
                  <p class="mt-3">
                    We reserve the right to refuse any order placed through the Services. We may, in our sole discretion, limit or cancel quantities purchased per person, per household, or per order. These restrictions may include orders placed by or under the same customer account, the same payment method, and/or orders that use the same billing or shipping address. We reserve the right to limit or prohibit orders that, in our sole judgement, appear to be placed by dealers, resellers, or distributors.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="contibution">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    7. USER GENERATED CONTRIBUTIONS
                  </h1>
                  <p class="mt-3">
                   The Services does not offer users to submit or post content. We may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Services, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (herein referred to as 'Contributions'). Contributions may be viewable by other users of the Services and through third-party websites.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="license">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    8. CONTRIBUTION LICENCE
                  </h1>
                  <p class="mt-3">
                   You and Services agree that we may access, store, process, and use any information and personal data that you provide and your choices (including settings).
                  </p>
                  <p class="mt-3">
                   By submitting suggestions or other feedback regarding the Services, you agree that we can use and share such feedback for any purpose without compensation to you
                  </p>
                  <p class="mt-3">
                   We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Services. You are solely responsible for your Contributions to the Services and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="mobile">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    9. MOBILE APPLICATION LICENCE
                  </h1>
                  <h1 class="font-medium mt-3 text-black text-base text-center lg:text-left lg:text-sm">
                    Use License
                  </h1>
                  <p class="mt-3">
                  If you access the Services via the App, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the App on wireless electronic devices owned or controlled by you, and to access and use the App on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Legal Terms. You shall not: (1) except as permitted by applicable law, decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the App; (2) make any modification, adaptation, improvement, enhancement, translation, or derivative work from the App; (3) violate any applicable laws, rules, or regulations in connection with your access or use of the App; (4) remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the App; (5) use the App for any revenue-generating endeavour, commercial enterprise, or other purpose for which it is not designed or intended; (6) make the App available over a network or other environment permitting access or use by multiple devices or users at the same time; (7) use the App for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the App; (8) use the App to send automated queries to any website or to send any unsolicited commercial email; or (9) use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications, accessories, or devices for use with the App.
                  </p>
                  <h1 class="font-medium mt-3 text-black text-base text-center lg:text-left lg:text-sm">
                    Apple and Android Devices
                  </h1>
                  <p class="mt-3">
                  The following terms apply when you use the App obtained from either the Apple Store or Google Play (hereinafter referred each an 'App Distributor') to access the Services: (1) the license granted to you for our App is limited to a non-transferable licence to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service; (2) we are responsible for providing any maintenance and support services with respect to the App as specified in the terms and conditions of this mobile application licence contained in these Legal Terms or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the App; (3) in the event of any failure of the App to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the App, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the App; (4) you represent and warrant that (i) you are not located in a country that is subject to a US government embargo, or that has been designated by the US government as a 'terrorist supporting' country and (ii) you are not listed on any US government list of prohibited or restricted parties; (5) you must comply with applicable third-party terms of agreement when using the App, e.g. if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the App; and (6) you acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application licence contained in these Legal Terms, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application licence contained in these Legal Terms against you as a third-party beneficiary thereof.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="manage">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    10. SERVICES MANAGEMENT
                  </h1>
                  <p class="mt-3">
                   We reserve the right, but not the obligation, to: (1) monitor the Services for violations of these Legal Terms; (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Legal Terms, including without limitation, reporting such user to law enforcement authorities; (3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof; (4) in our sole discretion and without limitation, notice, or liability, to remove from the Services or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems; and (5) otherwise manage the Services in a manner designed to protect our rights and property and to facilitate the proper functioning of the Services.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="terminate">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    11. TERM AND TERMINATION
                  </h1>
                  <p class="mt-3">
                   These Legal Terms shall remain in full force and effect while you use the Services. Without limiting any other provision of these legal terms, we reserve the right to, in our sole discretion and without notice or liability, deny access to and use of the services (including blocking certain IP addresses), to any person for any reason or for no reason, including without limitation for breach of any representation, warranty, or covenant contained in these legal terms or of any applicable law or regulation. We may terminate your use or participation in the services or delete any content or information that you posted at any time, without warning, in our sole discretion.
                  </p>
                  <p class="mt-5">
                   If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="modify">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    12. MODIFICATIONS AND INTERRUPTIONS
                  </h1>
                  <p class="mt-3">
                   We reserve the right to change, modify, or remove the contents of the Services at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Services. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Services.
                  </p>
                  <p class="mt-3">
                   We cannot guarantee the Services will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Services, resulting in interruptions, delays, or errors. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Services at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Services during any downtime or discontinuance of the Services. Nothing in these Legal Terms will be construed to obligate us to maintain and support the Services or to supply any corrections, updates, or releases in connection therewith.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="law">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    13. GOVERNING LAW
                  </h1>
                  <p class="mt-3">
                   These Legal Terms shall be governed by and defined following the laws of the Federal Republic of Nigeria and yourself irrevocably consent that the courts with the federation, shall have exclusive jurisdiction to resolve any dispute which may arise in connection with these Legal Terms.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="dispute">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    14. DISPUTE RESOLUTION
                  </h1>
                  <p class="mt-3">
                   To expedite resolution and control the cost of any dispute, controversy, or claim related to these Legal Terms (hereinafter referred to as 'Dispute' and collectively, the 'Disputes') brought by either you or us (individually, a 'Party' and collectively, the 'Parties'), the Parties agree to first attempt to negotiate any Dispute (except those Disputes expressly provided below) informally for at least 60 days before initiating arbitration. Such informal negotiations commence upon written notice from one Party to the other Party.
                  </p>
                  <h1 class="font-bold text-black text-base text-center mt-5 lg:text-left lg:text-sm">
                    Binding Arbitration
                  </h1>
                  <p class="mt-3">
                   Any dispute arising out of or in connection with these Legal Terms, including any question regarding its existence, validity, or termination, shall be referred to and finally resolved by the Multidoor Court House within the company’s jurisdiction under the Laws of the Federation, Federal Republic of Nigeria, which, as a result of referring to it, is considered as the part of this clause. The number of arbitrators shall be  two (2). The seat, or legal place, or arbitration shall be binding on both Parties.  
                  </p>
                  <h1 class="font-bold text-black text-base text-center mt-5 lg:text-left lg:text-sm">
                    Restrictions
                  </h1>
                  <p class="mt-3">
                   The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually. To the full extent permitted by law, (a) no arbitration shall be joined with any other proceeding; (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilise class action procedures; and (c) there is no right or authority for any Dispute to be brought in a purported representative capacity on behalf of the general public or any other persons.
                  </p>
                  <h1 class="font-bold text-black text-base text-center mt-5 lg:text-left lg:text-sm">
                    Exceptions to Informal Negotiations and Arbitration
                  </h1>
                  <p class="mt-3">
                   The Parties agree that the following Disputes are not subject to the above provisions concerning informal negotiations binding arbitration: (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party; (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorised use; and (c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="correction">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    15. CORRECTIONS
                  </h1>
                  <p class="mt-3">
                   There may be information on the Services that contains typographical errors, inaccuracies, or omissions, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Services at any time, without prior notice.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="disclaimer">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    16. DISCLAIMER
                  </h1>
                  <p class="mt-3">
                   The services are provided on an as-is and as-available basis. You agree that your use of the services will be at your sole risk. To the fullest extent permitted by law, we disclaim all warranties, express or implied, in connection with the services and your use thereof, including, without limitation, the implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We make no warranties or representations about the accuracy or completeness of the services' content or the content of any websites or mobile applications linked to the services and we will assume no liability or responsibility for any (1) errors, mistakes, or inaccuracies of content and materials, (2) personal injury or property damage, of any nature whatsoever, resulting from your access to and use of the services, (3) any unauthorized access to or use of our secure servers and/or any and all personal information and/or financial information stored therein, (4) any interruption or cessation of transmission to or from the services, (5) any bugs, viruses, trojan horses, or the like which may be transmitted to or through the services by any third party, and/or (6) any errors or omissions in any content and materials or for any loss or damage of any kind incurred as a result of the use of any content posted, transmitted, or otherwise made available via the services. We do not warrant, endorse, guarantee, or assume responsibility for any product or service advertised or offered by a third party through the services, any hyperlinked website, or any website or mobile application featured in any banner or other advertising, and we will not be a party to or in any way be responsible for monitoring any transaction between you and any third-party providers of products or services. As with the purchase of a product or service through any medium or in any environment, you should use your best judgement and exercise caution where appropriate.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="indemnification">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                    17. INDEMNIFICATION
                  </h1>
                  <p class="mt-3">
                   You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) use of the Services; (2) breach of these Legal Terms; (3) any breach of your representations and warranties set forth in these Legal Terms; (4) your violation of the rights of a third party, including but not limited to intellectual property rights; or (5) any overt harmful act toward any other user of the Services with whom you connected via the Services. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="data">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                   18. USER DATA
                  </h1>
                  <p class="mt-3">
                  We will maintain certain data that you transmit to the Services for the purpose of managing the performance of the Services, as well as data relating to your use of the Services. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Services. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="miscellaneous">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                   19. MISCELLANEOUS
                  </h1>
                  <p class="mt-3">
                  These Legal Terms and any policies or operating rules posted by us on the Services or in respect to the Services constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Legal Terms shall not operate as a waiver of such right or provision. These Legal Terms operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Legal Terms is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Legal Terms and does not affect validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Legal Terms or use of the Services. You agree that these Legal Terms will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Legal Terms and the lack of signing by the parties hereto to execute these Legal Terms.
                  </p>
                </div>
                <div class="text-base font-noto text-tgrey mt-6" id="contact">
                  <h1 class="font-bold text-black text-xl text-center lg:text-left lg:text-base">
                   20. CONTACT US
                  </h1>
                  <p class="mt-3">
                  In order to resolve a complaint regarding the Services or to receive further information regarding use of the Services, please contact us at: https://visionarymomas.com/
                  </p>
                </div>
             </div>
            </article>
          </div>
        </div>
    </section>
</section>
<div class="hidden lg:block w-full h-[500px] bg-coffee"></div>
<x-partial.freq />
<x-partial.footer />
@endsection