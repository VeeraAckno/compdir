@extends('master')

@section('content')


<div class="container">
    <h3>Sitemap</h3>
    <div class="col-md-6" id="secondary">
        <ul class="sitemap">
            <li><a href="{{ url('/') }}" >Home</a></li>
            <li>Solutions
            <ul>
            <li>
            <a href="{{ url('solutions/erp') }}">ERP</a>
            </li>
            <li>
            <a href="{{ url('solutions/crm') }}">CRM</a>
            </li>
            <li>
            <a href="{{ url('solutions/ecommerce') }}">E-Commerce</a>
            </li>
            <li>
            <a href="{{ url('solutions/bpm') }}">BPM</a>
            </li>
            <li>
            <a href="{{ url('solutions/bi') }}">BI & Analytics</a>
            </li>
            <li><a href="{{ url('/solutions/infrastructure') }}">Infrastructure Support</a></li>
            <li><a href="{{ url('/solutions/app-support') }}">Application Support</a></li>
            <li><a href="{{ url('/solutions/db-support') }}">Database Support</a></li>
            <li><a href="{{ url('/solutions/software') }}">Software Development</a></li>
            <li><a href="{{ url('/solutions/testing') }}">Software Testing</a></li>
            <li><a href="{{ url('/solutions/offshore') }}">Ind Offshore Center</a></li>
            <li><a href="{{ url('/solutions/staff-aug') }}">Staff Augmentation</a></li>

            </ul>
            </li>
            <li>Company
                <ul>
                    <li><a href="{{ url('/company/about') }}">about Us</a></li>
                    <li><a href="{{ url('/company/careers') }}">Career Opportunity</a></li>
                </ul>

            </li>
        </ul>
    </div>

    <div class="col-md-6" id="secondary">
            <ul class="sitemap">
            <li>Industry
            <ul>
                <li><a href="{{ url('/industry/manufacture') }}">Manufacturing</a></li>
                <li><a href="{{ url('/industry/retail') }}">Retail</a></li>
                <li><a href="{{ url('/industry/health') }}">Health Care</a></li>
                <li><a href="{{ url('/industry/telecom') }}">Telecom</a></li>
                <li><a href="{{ url('/industry/finance') }}">Finance</a></li>
                <li><a href="{{ url('/industry/realestate') }}">Real Estate</a></li>
                <li><a href="{{ url('/industry/agriculture') }}">Agriculture</a></li>
                <li><a href="{{ url('/industry/it') }}">IT Services</a></li>

            </ul>
            </li>
            <li>Technologies
            <ul>
                <li><a href="{{ url('/technologies/sap') }}">SAP</a></li>
                <li><a href="{{ url('/technologies/microsoft') }}">Microsoft</li>
                <li><a href="{{ url('/technologies/odoo') }}">Odoo</a></li>
                <li><a href="{{ url('/technologies/java') }}">Java</a></li>
                <li><a href="{{ url('/technologies/sugarcrm') }}">Sugar CRM</a></li>
                <li><a href="{{ url('/technologies/suitecrm') }}">Suite CRM</a></li>
            </ul>
            </li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
        </div>
</div>



@endsection