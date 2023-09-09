@extends('master')
@section('content')
<style>
    .bi {
    line-height: 0!important;
}

</style>
<main class="d-flex flex-column justify-content-start align-items-start py-5">
    <h1 class="text-body-emphasis">Get started with Bootstrap</h1>
    <p class="fs-5 col-md-8 text-start w-100">Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6 d-flex flex-column justify-content-start align-items-start">
        <h2 class="text-body-emphasis">Starter projects</h2>
        <p class="text-start">Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
        <ul class="list-unstyled ps-0 d-flex flex-column justify-content-start align-items-start">
          <li>
            <a class="icon-link text-start mb-1" href="https://github.com/twbs/examples/tree/main/icons-font" rel="noopener" target="_blank">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap npm starter
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="https://github.com/twbs/examples/tree/main/parcel" rel="noopener" target="_blank">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap Parcel starter
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="https://github.com/twbs/examples/tree/main/vite" rel="noopener" target="_blank">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap Vite starter
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="https://github.com/twbs/examples/tree/main/webpack" rel="noopener" target="_blank">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap Webpack starter
            </a>
          </li>
        </ul>
      </div>

      <div class="col-md-6 d-flex flex-column justify-content-start align-items-start">
        <h2 class="text-body-emphasis">Guides</h2>
        <p class="text-start">Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
        <ul class="list-unstyled ps-0 d-flex flex-column justify-content-start align-items-start">
          <li>
            <a class="icon-link text-start mb-1" href="/docs/5.3/getting-started/introduction/">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap quick start guide
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="/docs/5.3/getting-started/webpack/">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap Webpack guide
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="/docs/5.3/getting-started/parcel/">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap Parcel guide
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="/docs/5.3/getting-started/vite/">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Bootstrap Vite guide
            </a>
          </li>
          <li>
            <a class="icon-link text-start mb-1" href="/docs/5.3/getting-started/contribute/">
              <i class="bi bi-arrow-right-circle-fill"></i>
              Contributing to Bootstrap
            </a>
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection
