  @extends('layouts.layout')



  @section('printSection')
  <body onload="window.print()">


    <div class="container jumbotron jumbotron-fluid whiteBackground" >
      <div class="title">

        <img src="/img/IarscsLogo.PNG" alt="..."  class="img-thumbnail Img1">
        <h3>{{ __('lang.customer service assistant') }}</h3>
      </div>
      <br>
      <div class="container" style="text-align: center;">
       <div class="container navbar2-1 dariDirection " >
         <i class="fas fa-book-open icons1 icons12" ><span class="icons1"> {{ __('lang.bachelors degree')}}</span>
          <span class="icons1 icons12"><i class="fas fa-map-marker-alt icons1"> {{ __('lang.kabul')}}</i></span>
          <span class="icons1 icons12"><i class="fas fa-clock icons1"> {{ __('lang.full time')}}</i></span>
          <span class="icons1 icons12"><i class="fas fa-eye icons1"> {{ __('lang.view')}}</i></span>
        </i>
        
      </div>
    </div>
    <br><br>


    <div class="container row tableRow dariDirection">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <table class="table ">
          <tbody>
            <tr>
              <td>{{ __('lang.Date Posted:') }}</td>
              <td>{{ __('lang.Dec 9, 2020')}}</td>
              <td>{{ __('lang.Reference:')}}</td>
              <td>{{ __('lang.0354-1')}}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Closing date:') }}</td>
              <td>{{ __('lang.Dec 16, 2020') }}</td>
              <td>{{ __('lang.Work Type:') }}</td>
              <td>{{ __('lang.Full-Time') }}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Number of Vacancies:') }}</td>
              <td>{{ __('lang.1') }}</td>
              <td>{{ __('lang.Gender:') }}</td>
              <td>{{ __('lang.Male') }}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Functional Area:') }}</td>
              <td>{{ __('lang.OPERATIONS') }}</td>
              <td>{{ __('lang.Nationality:') }}</td>
              <td>{{ __('lang.Afghan') }}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Salary Range:') }}</td>
              <td>{{ __('lang.As per company salary scale') }}</td>
              <td>{{ __('lang.Years of Experience:') }}</td>
              <td>{{ __('lang.5 - 6 Year') }}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Contract Duration:') }}</td>
              <td>{{ __('lang.1 year(s)') }}</td>
              <td>{{ __('lang.Extension Possibility:') }}</td>
              <td>{{ __('lang.Yes') }}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Contract Type:') }}</td>
              <td>{{ __('lang.Permanent') }}</td>
              <td>{{ __('lang.Probation Period:') }}</td>
              <td>{{ __('lang.3 months') }}</td>
            </tr>
            <tr>
              <td>{{ __('lang.Required Languages:') }}</td>
              <td>{{ __('lang.Dari, Pashto, English') }}</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-1"></div>
    </div>

  

    <div class="container">
    <h3 class="heading dariDirection">{{ __('lang.About American University of Afghanistan:') }}</h3>
    <p class="dariDirection">{{ __('lang.Founded in 2006, the American University of Afghanistan (AUAF) is a private, non-profit, nationally-accredited university offering an American-style liberal arts education. We are a dynamic university with a student population of over 1,000 students.') }}</p>

    <br>
    <h3 class="heading dariDirection">{{ __('lang.Job Summary:') }}</h3>
    <p class="dariDirection">{{ __('lang.The Department is seeking qualified candidates to fill the position Senior Accounts Payable Management Officer. The job is located in Kabul, Afghanistan.') }}</p>
    <img src="/img/abss.PNG" alt="..."  class="img-thumbnail Img2 " height="30%" width="50%">
    <h3 class="heading dariDirection">{{ __('lang.Duties & Responsibilities:') }}</h3>
    <ul class="dariDirection">
      <li>{{ __('lang.Review complete supporting documents in MSDGP for accuracy via workflows and post them on daily basis.') }}</li>
      <li>{{ __('lang.Receive and review manual RFPs and obtain approval from authorized AUAF representatives and enter them in MSDGP via manual transaction entry.') }}</li>
      <li>{{ __('lang.Review and post goods received note transactions in MSDGP via workflow and ensure proper GL codes and analytical accounting dimension codes (AUAF, USAID, and OUSG) are accurate.') }}</li>
      <li>{{ __('lang.Conduct monthly reconciliation of subsidiary ledger VS General Ledger payable accounts.') }}</li>
      <li>{{ __('lang.Obtain review and approval signature on Microsoft Dynamics GP manual payment as applicable') }}</li>
      <li>{{ __('lang.Apply vendor’s payments with relevant invoices in MSDGP on daily basis.') }}</li>
      <li>{{ __('lang.Keep track of all wired transfers and check the transaction with bank statement on daily basis and follow up with relevant bank for the pending/outstanding submitted transfers which haven’t been processed by bank.') }}</li>
      <li>{{ __('lang.Conduct monthly and yearly final reconciliation exercise of all payable accounts for hard closing in the system.') }}</li>
      <li>{{ __('lang.Provide supporting documents, information and data to external/internal audits as required.') }}</li>
    </ul>
    <br>
    <h3 class="heading dariDirection">{{ __('lang.Job Requirement:') }}</h3>
    <ul class="dariDirection">
      <li>{{ __('lang.Bachelor of Business Administration, BSc in Accounting or ACCA 9 papers Passed') }}</li>
      <li>{{ __('lang.Minimum of 5-year relevant work experience') }}</li>
      <li>{{ __('lang.Accounting application/ERP. Microsoft Dynamics Great Plane(MDGP) is preferred/desired') }}</li>
    </ul>

    <br>
    <h3 class="heading dariDirection">{{ __('lang.Job Location:') }}</h3>
    <p>{{ __('lang.Afghanistan, Kabul') }}</p>
    <br>
    <h3 class="heading dariDirection">{{ __('lang.Submission Guideline:') }}</h3>
    <p class="dariDirection">{{ __('lang.o apply, please send as a single PDF document: a cover letter, curriculum vitae (CV) and contact information for three references to nationaljobs@auaf.edu.af Review of applications will begin immediately and will continue until the position is filled. Please, include AF-N-47-2020- Senior Accounts Payable Management Officer in the subject line of the email, otherwise, the application will not be considered. Applications in languages other than English will not be reviewed. Please be advised that only shortlisted candidates will be contacted. A written test or example of work may be used as a form of screening.') }}</p>
    <br>
    <h3 class="heading dariDirection">{{ __('lang.Submission Email:') }}</h3>
    <p><span><i class="fas fa-envelope"></i></span><a href="nationaljobs@auaf.edu.af"> nationaljobs@auaf.edu.af</a></p>

    </div>
  </div>
</body>
</html
