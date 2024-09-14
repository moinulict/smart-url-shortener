  @extends('layouts.website')
  @section('meta')
      <title>My Smart URLs</title>
  @stop
  @section('contents')
      <main class="customerArea">
          <section>
              <div class="container">
                @php 
                $total = count($urls);
                @endphp
                  <div class="d-flex justify-content-between content-header">
                      <h1>My Smart URLs({{ $total }})</h1>
                  </div>

                  @if ($total)
                      <div class="list-group">
                          @foreach ($urls as $url)
                              @php
                                  $shortUrl = $url->short_url;
                              @endphp
                              <div class="list-group-item list-group-item-action p-3">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h5 class="mb-1 shortenUrl_{{ $url->id }}">{{ $shortUrl }}</h5>
                                      <small>{{ Helper::formatTimeDifference($url->created_at) }}</small>
                                  </div>
                                  <p class="mb-1">{{ $url->long_url }}</p>
                                  <div class="pr pt-2">
                                      <span class="ack copiedAtHistory ackPos text-success none copyAck_{{ $url->id }}">Copied</span>
                                      <a href="javascript:;" class="btn btn-primary btn-sm historyCopyBtn"
                                          data-id="{{ $url->id }}" title="Copy Shorten URL"><i
                                              class="fa-solid fa-copy"></i>
                                          Copy</a>
                                      <a href="{{ $shortUrl }}" target="_blank" class="btn btn-success btn-sm mx-1"
                                          title="Visit Site"><i class="fa-solid fa-diamond-turn-right"></i> Visit</a>
                                      <span class="dropdown btnShare">
                                          <button class="btn btn-info btn-sm dropdown-toggle" type="button"
                                              id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="fa-solid fa-share-nodes"></i> Share`;
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                              <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $shortUrl }}"
                                                      class="facebook" target="_blank"><i class="fa-brands fa-facebook"></i>
                                                      <span>Facebook</span></a>
                                              </li>
                                              <li><a href="https://api.whatsapp.com/send?text={{ $shortUrl }}"
                                                      class="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i>
                                                      <span>WhatsApp</span></a>
                                              </li>
                                              <li><a href="https://twitter.com/intent/tweet?url={{ $shortUrl }}"
                                                      class="twitter" target="_blank"><i class="fa-brands fa-twitter"></i>
                                                      <span>Twitter</span></a>
                                              </li>
                                              <li><a href="https://www.linkedin.com/shareArticle?url={{ $shortUrl }}"
                                                      class="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i>
                                                      <span>Linkedin</span></a>
                                              </li>
                                              <li><a href="https://pinterest.com/pin/create/button/?url={{ $shortUrl }}"
                                                      class="pinterest" target="_blank"><i
                                                          class="fa-brands fa-pinterest"></i>
                                                      <span>Pinterest</span></a>
                                              </li>
                                              <li><a href="mailto:?subject=Share URLGEN on Email&body=:{{ $shortUrl }}"
                                                      class="envelope" target="_blank"><i class="fa fa-envelope"></i>
                                                      <span>Envelope</span></a></li>
                                          </ul>
                                      </span>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  @else
                      <div class="alert alert-info">Sorry but you don't have any generated URLs.</div>
                  @endif

              </div>
          </section>
      </main>
  @stop
