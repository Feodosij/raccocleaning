<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raccocleaning
 */

get_header();
?>

	<main class="content">
        <section class="promo">
          <div class="promo__bg">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/src/static/app/img/promo_mobile.png" />
              <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri(); ?>/src/static/app/img/promo.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/promo.png" alt="" role="presentation" />
            </picture>
          </div>
          <div class="container">
            <div class="promo__container">
              <div class="promo__content">
                <div class="section-subtitle">
                  <span>Makes life better</span>
                </div>
                <div class="promo__title">
                  <h1>Professional cleaning services <span>in Chicago’s</span></h1>
                </div>
                <div class="promo__text">
                  <p>We strive to make your experience with us both easy and enjoyable. You can book your home or apartment cleaning online with our user friendly system </p>
                </div>
              </div>
              <div class="promo__form">
                <div class="promo__form-head">
                  <div class="promo__form-title">
                    <h2>Book a Cleaning </h2>
                  </div>
                  <div class="promo__form-text">
                    <p>You can apply right now! And very soon our manager will contact you.</p>
                  </div>
                </div>
                <form class="promo__form-body" id="form_promo">
                  <div class="promo__form-row">
                    <div class="promo__form-input">
                      <div class="input input--text ">
                        <input type="text" name="name" required data-validation="name" placeholder=" ">
                        <label>Name</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_74)">
                              <path d="M7.39316 7.72554C8.38582 7.72554 9.24538 7.36952 9.9477 6.66708C10.65 5.96476 11.006 5.10543 11.006 4.11266C11.006 3.12023 10.65 2.26078 9.94758 1.55823C9.24515 0.856024 8.3857 0.5 7.39316 0.5C6.40039 0.5 5.54105 0.856024 4.83873 1.55835C4.13641 2.26067 3.78027 3.12011 3.78027 4.11266C3.78027 5.10543 4.13641 5.96488 4.83885 6.6672C5.54128 7.3694 6.40073 7.72554 7.39316 7.72554Z" fill="#C3CCD9" />
                              <path d="M13.7147 12.0342C13.6944 11.742 13.6534 11.4231 13.5931 11.0864C13.5322 10.7472 13.4539 10.4266 13.36 10.1335C13.2631 9.83057 13.1312 9.53142 12.9683 9.24474C12.7991 8.9472 12.6005 8.68811 12.3775 8.4749C12.1444 8.25186 11.859 8.07253 11.529 7.94173C11.2001 7.81161 10.8356 7.74569 10.4457 7.74569C10.2926 7.74569 10.1445 7.80852 9.85848 7.99471C9.68247 8.1095 9.47659 8.24225 9.24679 8.38907C9.0503 8.51427 8.78411 8.63157 8.45532 8.73777C8.13455 8.84157 7.80885 8.89421 7.48739 8.89421C7.16592 8.89421 6.84034 8.84157 6.51922 8.73777C6.19078 8.63169 5.92459 8.51439 5.72832 8.38919C5.5007 8.24373 5.29471 8.11098 5.11607 7.9946C4.83042 7.8084 4.68222 7.74557 4.5291 7.74557C4.13909 7.74557 3.77471 7.81161 3.44592 7.94184C3.1161 8.07242 2.83058 8.25175 2.59723 8.47502C2.37442 8.68834 2.17563 8.94731 2.00672 9.24474C1.84387 9.53142 1.71203 9.83045 1.61499 10.1336C1.52126 10.4267 1.44287 10.7472 1.38199 11.0864C1.32168 11.4227 1.28071 11.7416 1.26045 12.0346C1.24054 12.3216 1.23047 12.6195 1.23047 12.9203C1.23047 13.7033 1.47938 14.3372 1.97021 14.8047C2.45498 15.266 3.09642 15.5001 3.87645 15.5001H11.099C11.879 15.5001 12.5203 15.2661 13.0051 14.8047C13.4961 14.3376 13.745 13.7036 13.745 12.9202C13.7449 12.618 13.7347 12.3199 13.7147 12.0342Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_74">
                                <rect width="14.9999" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="promo__form-input">
                      <div class="input input--text ">
                        <input type="text" name="tel" required data-validation="tel" inputmode="tel" placeholder=" ">
                        <label>Phone number</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_93)">
                              <path d="M14.5916 11.5085L12.4983 9.41519C11.7507 8.66759 10.4798 8.96666 10.1807 9.93852C9.95646 10.6114 9.20886 10.9852 8.53601 10.8356C7.0408 10.4618 5.02227 8.51807 4.64847 6.9481C4.42418 6.27522 4.87275 5.52762 5.54559 5.30336C6.51748 5.00432 6.81652 3.73339 6.06892 2.98579L3.97562 0.892493C3.37754 0.369169 2.48041 0.369169 1.95709 0.892493L0.536636 2.31294C-0.883814 3.80815 0.686158 7.77046 4.1999 11.2842C7.71365 14.798 11.676 16.4427 13.1712 14.9475L14.5916 13.527C15.115 12.9289 15.115 12.0318 14.5916 11.5085Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_93">
                                <rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="promo__form-row">
                    <div class="promo__form-input">
                      <div class="input input--email ">
                        <input type="email" name="email" required data-validation="email" placeholder=" ">
                        <label>Email</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.50025 7.18221L14.3464 3.16572C14.1493 2.87412 13.8843 2.6348 13.5741 2.46838C13.264 2.30197 12.918 2.21345 12.5661 2.21045H2.4344C2.08065 2.21029 1.73221 2.29659 1.41942 2.46181C1.10662 2.62704 0.838931 2.8662 0.639648 3.15849L7.50025 7.18221Z" fill="#C3CCD9" />
                            <path d="M8.22331 8.42698C8.00342 8.55453 7.75382 8.62193 7.49962 8.62238C7.24607 8.62413 6.99651 8.55924 6.77592 8.43422L0.262695 4.62036V11.6185C0.262695 12.1943 0.491433 12.7465 0.898589 13.1536C1.30574 13.5608 1.85797 13.7895 2.43377 13.7895H12.5655C13.1413 13.7895 13.6935 13.5608 14.1006 13.1536C14.5078 12.7465 14.7365 12.1943 14.7365 11.6185V4.62036L8.22331 8.42698Z" fill="#C3CCD9" />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="promo__form-subtitle">
                    <h3>Address cleaning</h3>
                  </div>
                  <div class="promo__form-row">
                    <div class="promo__form-input">
                      <div class="input input--text ">
                        <input type="text" name="address" required data-validation="address" placeholder=" ">
                        <label>Address</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_135)">
                              <path d="M7.5 0.5C6.00876 0.501978 4.57917 1.09525 3.52471 2.14971C2.47025 3.20417 1.87698 4.63376 1.875 6.125C1.875 10.1633 7.11562 15.2211 7.33828 15.4344C7.38159 15.4765 7.43961 15.5 7.5 15.5C7.56039 15.5 7.61841 15.4765 7.66172 15.4344C7.88437 15.2211 13.125 10.1633 13.125 6.125C13.123 4.63376 12.5298 3.20417 11.4753 2.14971C10.4208 1.09525 8.99124 0.501978 7.5 0.5V0.5ZM7.5 8.70312C6.9901 8.70312 6.49164 8.55192 6.06767 8.26863C5.6437 7.98534 5.31326 7.5827 5.11812 7.11161C4.92299 6.64052 4.87194 6.12214 4.97141 5.62203C5.07089 5.12193 5.31643 4.66255 5.67699 4.30199C6.03755 3.94143 6.49693 3.69589 6.99703 3.59641C7.49714 3.49694 8.01552 3.54799 8.48661 3.74312C8.9577 3.93826 9.36034 4.2687 9.64363 4.69267C9.92692 5.11664 10.0781 5.6151 10.0781 6.125C10.0777 6.80864 9.80596 7.46415 9.32256 7.94756C8.83915 8.43096 8.18364 8.70271 7.5 8.70312Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_135">
                                <rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="promo__form-row">
                    <div class="promo__form-input">
                      <div class="input input--select ">
                        <input type="text" readonly required placeholder=" ">
                        <label>Service</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_155)">
                              <path d="M6.03124 2.00959C5.85963 1.83795 5.58135 1.83795 5.40971 2.00959L5.00244 2.41685L13.0825 10.4969L13.4897 10.0896C13.6614 9.918 13.6614 9.63974 13.4897 9.4681L6.03124 2.00959Z" fill="#C3CCD9" />
                              <path d="M14.8352 8.04029C14.6462 7.88796 14.3695 7.91773 14.2173 8.10674L14.1495 8.1908C13.9972 8.37982 14.027 8.65649 14.216 8.80876C14.2973 8.87425 14.3947 8.90607 14.4915 8.90607C14.6199 8.90607 14.7472 8.85008 14.834 8.74231L14.9017 8.65825C15.054 8.46927 15.0242 8.19259 14.8352 8.04029Z" fill="#C3CCD9" />
                              <path d="M6.78912 1.69159C6.9016 1.69159 7.01408 1.6487 7.09987 1.56285L7.41244 1.25028C7.58408 1.07864 7.58408 0.800381 7.41244 0.628744C7.24083 0.457106 6.96255 0.457106 6.79091 0.628744L6.47834 0.941313C6.3067 1.11295 6.3067 1.39121 6.47834 1.56285C6.56419 1.64867 6.67664 1.69159 6.78912 1.69159Z" fill="#C3CCD9" />
                              <path d="M14.8707 5.61152C14.6997 5.43938 14.4214 5.43848 14.2492 5.60953L13.0091 6.8417C12.8369 7.01278 12.836 7.29104 13.0071 7.46323C13.093 7.5497 13.2059 7.59294 13.3189 7.59294C13.4309 7.59294 13.5429 7.55037 13.6287 7.46523L14.8687 6.23306C15.0409 6.06198 15.0418 5.78372 14.8707 5.61152Z" fill="#C3CCD9" />
                              <path d="M14.0708 3.29371L11.8734 5.49119C11.7017 5.66282 11.7017 5.94108 11.8734 6.11272C11.9592 6.19854 12.0717 6.24146 12.1841 6.24146C12.2966 6.24146 12.4091 6.19857 12.4949 6.11272L14.6923 3.91524C14.864 3.7436 14.864 3.46534 14.6923 3.29371C14.5208 3.12207 14.2425 3.12207 14.0708 3.29371Z" fill="#C3CCD9" />
                              <path d="M10.6609 4.83891C10.7468 4.92473 10.8592 4.96766 10.9717 4.96766C11.0841 4.96766 11.1966 4.92476 11.2824 4.83891L14.8703 1.2511C15.0419 1.07947 15.0419 0.801205 14.8703 0.629568C14.6987 0.45793 14.4204 0.45793 14.2487 0.629568L10.6609 4.21738C10.4893 4.38902 10.4893 4.66728 10.6609 4.83891Z" fill="#C3CCD9" />
                              <path d="M9.20539 3.80826C9.29121 3.89408 9.40369 3.937 9.51614 3.937C9.6286 3.937 9.74111 3.89411 9.8269 3.80826L11.4669 2.16826C11.6385 1.99663 11.6385 1.71837 11.4669 1.54673C11.2953 1.37509 11.017 1.37509 10.8454 1.54673L9.20536 3.18672C9.03375 3.35836 9.03375 3.63662 9.20539 3.80826Z" fill="#C3CCD9" />
                              <path d="M8.27642 2.69063C8.38888 2.69063 8.50139 2.6477 8.58718 2.56188L9.65987 1.48919C9.83151 1.31758 9.83151 1.03929 9.65987 0.867655C9.48826 0.696046 9.21 0.696017 9.03833 0.867655L7.96564 1.94038C7.794 2.11199 7.794 2.39027 7.96564 2.56191C8.05146 2.64773 8.16391 2.69063 8.27642 2.69063Z" fill="#C3CCD9" />
                              <path d="M0.257357 14.0005C-0.0844834 14.3424 -0.0844834 14.9018 0.257357 15.2436C0.599197 15.5854 1.15859 15.5854 1.50043 15.2436L5.50998 11.2341L4.26691 9.99095L0.257357 14.0005Z" fill="#C3CCD9" />
                              <path d="M4.21541 2.87287C4.0438 2.70123 3.76552 2.70123 3.59388 2.87287L2.88945 3.57726C2.37539 4.09136 2.37539 4.92781 2.88945 5.44187L5.49555 8.04796L4.84202 8.70149C4.67038 8.87313 4.67038 9.15139 4.84202 9.32303L6.14222 10.6232C6.22464 10.7057 6.33642 10.752 6.45298 10.752C6.56956 10.752 6.68131 10.7057 6.76373 10.6232L7.41726 9.9697L10.0579 12.6103C10.3064 12.8589 10.6376 12.9958 10.9902 12.9958C11.3428 12.9958 11.6739 12.8589 11.9225 12.6103L12.6269 11.9059C12.7986 11.7343 12.7986 11.456 12.6269 11.2844L4.21541 2.87287Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_155">
                                <rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <input type="hidden" name="service">
                        <div class="input__select">
                          <ul>
                            <li data-value="1">Service 1</li>
                            <li data-value="2">Service 2</li>
                            <li data-value="3">Service 3</li>
                            <li data-value="4">Service 4</li>
                            <li data-value="5">Service 5</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="promo__form-input">
                      <div class="input input--text ">
                        <input type="text" name="square" required data-validation="numeric" inputmode="numeric" placeholder=" ">
                        <label>Square (Sq ft)</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_187)">
                              <path d="M12.0156 3.48441L12.9642 4.43306L12.343 5.05429L11.3944 4.10564L10.6139 4.88608L11.5626 5.83472L10.9413 6.45596L9.99269 5.50731L9.21226 6.28774L10.1609 7.23639L9.53967 7.85763L8.59102 6.90898L7.81059 7.68941L8.75924 8.63806L8.138 9.2593L7.18935 8.31065L6.40892 9.09108L7.35757 10.0397L6.73633 10.661L5.78768 9.71231L5.00725 10.4927L5.9559 11.4414L5.33467 12.0626L4.38602 11.114L3.60559 11.8944L4.55423 12.8431L3.93306 13.4642L2.98441 12.5156L0 15.5H15V0.5L12.0156 3.48441ZM12.1447 7.39342V12.6447H6.89342L12.1447 7.39342Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_187">
                                <rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="promo__form-row">
                    <div class="promo__form-input">
                      <div class="input input--number ">
                        <input type="numbertext" name="bedrooms" required data-validation="numeric" inputmode="numeric" value="1" min="0" maxlength="3" placeholder=" ">
                        <label>Bedrooms</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_208)">
                              <path d="M1.56248 6.43751H3.12497C3.02873 6.43751 2.93809 6.39312 2.87873 6.31751C2.81935 6.24189 2.79872 6.14313 2.82187 6.04938L3.01625 5.27252C3.12063 4.85439 3.49499 4.56251 3.92562 4.56251H5.9375C6.45438 4.56251 6.875 4.98312 6.875 5.50001V6.125C6.875 6.2975 6.73499 6.43751 6.56249 6.43751H8.43749C8.26499 6.43751 8.12498 6.2975 8.12498 6.125V5.50001C8.12498 4.98312 8.5456 4.56251 9.06248 4.56251H11.0744C11.505 4.56251 11.8793 4.85439 11.9837 5.27252L12.1781 6.04938C12.2019 6.14252 12.1806 6.24189 12.1213 6.31751C12.0619 6.39312 11.9713 6.43751 11.875 6.43751H13.4375C13.61 6.43751 13.75 6.2975 13.75 6.125V4.25C13.75 3.38876 13.0488 2.68751 12.1875 2.68751H2.81249C1.95125 2.68751 1.25 3.38876 1.25 4.25V6.125C1.25 6.2975 1.38998 6.43751 1.56248 6.43751Z" fill="#C3CCD9" />
                              <path d="M13.4375 7.0625H1.56249C0.70125 7.0625 0 7.76375 0 8.62499V13C0 13.1725 0.14001 13.3125 0.31251 13.3125C0.48501 13.3125 0.62502 13.1725 0.62502 13V12.0625H14.375V13C14.375 13.1725 14.515 13.3125 14.6875 13.3125C14.86 13.3125 15 13.1725 15 13V8.62499C15 7.76375 14.2987 7.0625 13.4375 7.0625ZM14.375 11.4375H0.62499V10.8125H14.375V11.4375H14.375Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_208">
                                <rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <div class="input__number">
                          <div class="input__number-btn input__number-minus">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-btn-minus.svg" alt="-">
                          </div>
                          <div class="input__number-btn input__number-plus">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-btn-plus.svg" alt="+">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="promo__form-input">
                      <div class="input input--number ">
                        <input type="numbertext" name="bathrooms" required data-validation="numeric" inputmode="numeric" value="1" min="0" maxlength="3" placeholder=" ">
                        <label>Bathrooms</label>
                        <div class="input__validation">
                          <div class="input__validation-valid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-checked.svg" alt="" role="presentation">
                          </div>
                          <div class="input__validation-invalid">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cancel.svg" alt="" role="presentation">
                          </div>
                        </div>
                        <div class="input__error"></div>
                        <div class="input__ico">
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_142_232)">
                              <path d="M13.2129 7.12109C13.2129 5.90962 12.2271 4.92383 11.0156 4.92383H9.25781C8.04634 4.92383 7.06055 5.90962 7.06055 7.12109C7.06055 7.36394 7.25716 7.56055 7.5 7.56055H12.7734C13.0163 7.56055 13.2129 7.36394 13.2129 7.12109Z" fill="#C3CCD9" />
                              <path d="M4.86328 1.37891H8.37891C9.10583 1.37891 9.69727 1.97034 9.69727 2.69727V3.24715C9.32693 3.38059 9.03191 3.67299 8.89927 4.04492H11.3742C11.2415 3.67299 10.9465 3.38059 10.5762 3.24715V2.69727C10.5762 1.48579 9.59038 0.5 8.37891 0.5H4.86328C3.65181 0.5 2.66602 1.48579 2.66602 2.69727V5.80273H2.22656C1.98372 5.80273 1.78711 5.99934 1.78711 6.24219V15.0605C1.78711 15.3034 1.98372 15.5 2.22656 15.5H3.98438C4.22722 15.5 4.42383 15.3034 4.42383 15.0605V11.0762H5.30273V11.5156C5.30273 11.7585 5.49934 11.9551 5.74219 11.9551C5.98503 11.9551 6.18164 11.7585 6.18164 11.5156V9.75781C6.18164 9.51497 5.98503 9.31836 5.74219 9.31836C5.49934 9.31836 5.30273 9.51497 5.30273 9.75781V10.1973H4.42383V6.24219C4.42383 5.99934 4.22722 5.80273 3.98438 5.80273H3.54492V2.69727C3.54492 1.97034 4.13635 1.37891 4.86328 1.37891Z" fill="#C3CCD9" />
                              <path d="M8.37891 10.1973C8.62175 10.1973 8.81836 10.0007 8.81836 9.75781V8.87891C8.81836 8.63606 8.62175 8.43945 8.37891 8.43945C8.13606 8.43945 7.93945 8.63606 7.93945 8.87891V9.75781C7.93945 10.0007 8.13606 10.1973 8.37891 10.1973Z" fill="#C3CCD9" />
                              <path d="M10.1367 10.1973C10.3796 10.1973 10.5762 10.0007 10.5762 9.75781V8.87891C10.5762 8.63606 10.3796 8.43945 10.1367 8.43945C9.89388 8.43945 9.69727 8.63606 9.69727 8.87891V9.75781C9.69727 10.0007 9.89388 10.1973 10.1367 10.1973Z" fill="#C3CCD9" />
                              <path d="M12.334 8.87891C12.334 8.63606 12.1374 8.43945 11.8945 8.43945C11.6517 8.43945 11.4551 8.63606 11.4551 8.87891V9.75781C11.4551 10.0007 11.6517 10.1973 11.8945 10.1973C12.1374 10.1973 12.334 10.0007 12.334 9.75781V8.87891Z" fill="#C3CCD9" />
                              <path d="M7.93945 12.3945C7.93945 12.6374 8.13606 12.834 8.37891 12.834C8.62175 12.834 8.81836 12.6374 8.81836 12.3945V11.5156C8.81836 11.2728 8.62175 11.0762 8.37891 11.0762C8.13606 11.0762 7.93945 11.2728 7.93945 11.5156V12.3945Z" fill="#C3CCD9" />
                              <path d="M9.69727 12.3945C9.69727 12.6374 9.89388 12.834 10.1367 12.834C10.3796 12.834 10.5762 12.6374 10.5762 12.3945V11.5156C10.5762 11.2728 10.3796 11.0762 10.1367 11.0762C9.89388 11.0762 9.69727 11.2728 9.69727 11.5156V12.3945Z" fill="#C3CCD9" />
                              <path d="M11.8945 11.0762C11.6517 11.0762 11.4551 11.2728 11.4551 11.5156V12.3945C11.4551 12.6374 11.6517 12.834 11.8945 12.834C12.1374 12.834 12.334 12.6374 12.334 12.3945V11.5156C12.334 11.2728 12.1374 11.0762 11.8945 11.0762Z" fill="#C3CCD9" />
                              <path d="M11.0156 15.5C11.2585 15.5 11.4551 15.3034 11.4551 15.0605V14.1523C11.4551 13.9095 11.2585 13.7129 11.0156 13.7129C10.7728 13.7129 10.5762 13.9095 10.5762 14.1523V15.0605C10.5762 15.3034 10.7728 15.5 11.0156 15.5Z" fill="#C3CCD9" />
                              <path d="M9.25781 15.5C9.50066 15.5 9.69727 15.3034 9.69727 15.0605V14.1523C9.69727 13.9095 9.50066 13.7129 9.25781 13.7129C9.01497 13.7129 8.81836 13.9095 8.81836 14.1523V15.0605C8.81836 15.3034 9.01497 15.5 9.25781 15.5Z" fill="#C3CCD9" />
                            </g>
                            <defs>
                              <clipPath id="clip0_142_232">
                                <rect width="15" height="15" fill="white" transform="translate(0 0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <div class="input__number">
                          <div class="input__number-btn input__number-minus">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-btn-minus.svg" alt="-">
                          </div>
                          <div class="input__number-btn input__number-plus">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-btn-plus.svg" alt="+">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="promo__form-submit">
                    <button type="submit" class="button   "> Send </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <section class="services" id="services">
          <div class="container">
            <div class="section-title">
              <h2>Our <span>Services</span></h2>
            </div>
            <div class="services__container">
              <article class="services__item">
                <div class="services__item-head">
                  <div class="services__item-ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-plumbing.svg" alt="" role="presentation">
                  </div>
                  <div class="services__item-title">
                    <h3>Regular</h3>
                  </div>
                </div>
                <div class="services__item-text">
                  <p>You fill out an application on the site or contact us in a way convenient for you (phone, e mail, instant messenger)</p>
                </div>
                <div class="services__item-link">
                  <a href="openPopup-form-popup">Send a request</a>
                </div>
              </article>
              <article class="services__item">
                <div class="services__item-head">
                  <div class="services__item-ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-computer.svg" alt="" role="presentation">
                  </div>
                  <div class="services__item-title">
                    <h3>Deep</h3>
                  </div>
                </div>
                <div class="services__item-text">
                  <p>You fill out an application on the site or contact us in a way convenient for you (phone, e mail, instant messenger)</p>
                </div>
                <div class="services__item-link">
                  <a href="openPopup-form-popup">Send a request</a>
                </div>
              </article>
              <article class="services__item">
                <div class="services__item-head">
                  <div class="services__item-ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-vacuum.svg" alt="" role="presentation">
                  </div>
                  <div class="services__item-title">
                    <h3>Move in/out</h3>
                  </div>
                </div>
                <div class="services__item-text">
                  <p>You fill out an application on the site or contact us in a way convenient for you (phone, e mail, instant messenger)</p>
                </div>
                <div class="services__item-link">
                  <a href="openPopup-form-popup">Send a request</a>
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="reasons">
          <div class="container">
            <div class="reasons__container">
              <div class="section-subtitle">
                <span>Makes life better</span>
              </div>
              <div class="reasons__title">
                <h1>Professional cleaning services in Chicago’s</h1>
              </div>
              <div class="reasons__text">
                <p>We’re the ultimate cleaning company. Try Us & You’ll See What The Awesome Is All About!</p>
              </div>
              <ul class="reasons__list">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-bubbles.svg" alt="" role="presentation"> Free cleaning supplies </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-shopping-cart.svg" alt="" role="presentation"> Superior order customization </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-badge.svg" alt="" role="presentation"> Exceptional quality & consistency </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-cleaning-spray.svg" alt="" role="presentation"> Free rooms freshener & deodorizing </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-5-stars.svg" alt="" role="presentation"> Pre-screened professional maids </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-money.svg" alt="" role="presentation"> No hidden fees </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="steps">
          <div class="container">
            <div class="section-title">
              <h2>How Does <span>It Work</span></h2>
            </div>
            <div class="steps__container">
              <article class="steps__item">
                <div class="steps__item-ico">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-raccoon-book.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-text">
                  <div class="steps__item-title">
                    <h3>Book</h3>
                  </div>
                  <p>You fill out an application on the site or contact us in a way convenient for you (phone, e mail, instant messenger)</p>
                </div>
                <div class="steps__item-num"></div>
                <div class="steps__item-steps-side">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-side.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-steps-bottom">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-bottom.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-steps-mobile">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-mobile.svg" alt="" role="presentation">
                </div>
              </article>
              <article class="steps__item">
                <div class="steps__item-ico">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-raccoon-clean.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-text">
                  <div class="steps__item-title">
                    <h3>Clean</h3>
                  </div>
                  <p>You fill out an application on the site or contact us in a way convenient for you (phone, e mail, instant messenger)</p>
                </div>
                <div class="steps__item-num"></div>
                <div class="steps__item-steps-side">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-side.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-steps-bottom">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-bottom.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-steps-mobile">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-mobile.svg" alt="" role="presentation">
                </div>
              </article>
              <article class="steps__item">
                <div class="steps__item-ico">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/ico-raccoon-relax.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-text">
                  <div class="steps__item-title">
                    <h3>Relax</h3>
                  </div>
                  <p>You fill out an application on the site or contact us in a way convenient for you (phone, e mail, instant messenger)</p>
                </div>
                <div class="steps__item-num"></div>
                <div class="steps__item-steps-side">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-side.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-steps-bottom">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-bottom.svg" alt="" role="presentation">
                </div>
                <div class="steps__item-steps-mobile">
                  <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/steps-mobile.svg" alt="" role="presentation">
                </div>
              </article>
            </div>
          </div>
        </section>
        <section class="reviews">
          <div class="container">
            <div class="section-title">
              <h2>Reviews <span>of our clients</span></h2>
            </div>
            <div class="swiper-container">
              <div class="reviews__slider swiper swiper-pagination-mobile">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <article class="reviews__item">
                      <div class="reviews__item-info">
                        <div class="reviews__item-author">
                          <div class="reviews__item-author__avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/avatar.png" alt="">
                          </div>
                          <div class="reviews__item-author__name">
                            <h3>Joan Perkins</h3>
                          </div>
                        </div>
                        <div class="reviews__item-rating">
                          <div class="reviews__item-rating__stars rating-4 rating-half">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                          </div>
                          <span>4.5</span>
                        </div>
                      </div>
                      <div class="reviews__item-content">
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</q>
                      </div>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="reviews__item">
                      <div class="reviews__item-info">
                        <div class="reviews__item-author">
                          <div class="reviews__item-author__avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/avatar.png" alt="">
                          </div>
                          <div class="reviews__item-author__name">
                            <h3>Joan Perkins</h3>
                          </div>
                        </div>
                        <div class="reviews__item-rating">
                          <div class="reviews__item-rating__stars rating-4">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                          </div>
                          <span>4.0</span>
                        </div>
                      </div>
                      <div class="reviews__item-content">
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</q>
                      </div>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="reviews__item">
                      <div class="reviews__item-info">
                        <div class="reviews__item-author">
                          <div class="reviews__item-author__avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/avatar.png" alt="">
                          </div>
                          <div class="reviews__item-author__name">
                            <h3>Joan Perkins</h3>
                          </div>
                        </div>
                        <div class="reviews__item-rating">
                          <div class="reviews__item-rating__stars rating-5">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                          </div>
                          <span>5.0</span>
                        </div>
                      </div>
                      <div class="reviews__item-content">
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</q>
                      </div>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="reviews__item">
                      <div class="reviews__item-info">
                        <div class="reviews__item-author">
                          <div class="reviews__item-author__avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/avatar.png" alt="">
                          </div>
                          <div class="reviews__item-author__name">
                            <h3>Joan Perkins</h3>
                          </div>
                        </div>
                        <div class="reviews__item-rating">
                          <div class="reviews__item-rating__stars rating-3 rating-half">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z" fill="#D8DDE4" />
                              <path d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z" fill="#D8DDE4" />
                            </svg>
                          </div>
                          <span>3.5</span>
                        </div>
                      </div>
                      <div class="reviews__item-content">
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</q>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <div class="swiper-buttons">
                <div class="swiper-button-prev">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.255689 6.51423L4.62631 3.0358C5.07806 2.6857 5.75567 3.00192 5.75567 3.57789V4.74114C5.75567 5.11382 6.00413 5.44134 6.37682 5.44134H13.3224C13.6951 5.44134 14 5.71239 14 6.09637V7.92593C14 8.28733 13.6951 8.60355 13.3224 8.60355H6.37682C6.00413 8.60355 5.75567 8.89729 5.75567 9.26987V10.4331C5.75567 10.9978 5.07806 11.314 4.6376 10.9639L0.278275 7.57583C-0.0831194 7.31608 -0.0944128 6.78528 0.255689 6.51423Z" fill="#BCDDD5" />
                  </svg>
                </div>
                <div class="swiper-button-next">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.7443 6.51423L9.37369 3.0358C8.92194 2.6857 8.24433 3.00192 8.24433 3.57789V4.74114C8.24433 5.11382 7.99587 5.44134 7.62318 5.44134H0.677616C0.304927 5.44134 0 5.71239 0 6.09637V7.92593C0 8.28733 0.304927 8.60355 0.677616 8.60355H7.62318C7.99587 8.60355 8.24433 8.89729 8.24433 9.26987V10.4331C8.24433 10.9978 8.92194 11.314 9.3624 10.9639L13.7217 7.57583C14.0831 7.31608 14.0944 6.78528 13.7443 6.51423Z" fill="#BCDDD5" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="faq" id="faq">
          <div class="container">
            <div class="section-title">
              <h2>FAQ</h2>
            </div>
            <div class="faq__container">
              <div class="faq__list">
                <div class="accordion-list">
                  <div class="accordion">
                    <div class="accordion__head">
                      <h3>What areas do you service?</h3>
                      <div class="accordion__ico">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="accordion__ico-vertical" d="M7.5 15C7.30575 15 7.11946 14.9228 6.9821 14.7855C6.84474 14.6481 6.76758 14.4618 6.76758 14.2676V0.732422C6.76758 0.538172 6.84474 0.351877 6.9821 0.214521C7.11946 0.0771657 7.30575 0 7.5 0C7.69425 0 7.88054 0.0771657 8.0179 0.214521C8.15526 0.351877 8.23242 0.538172 8.23242 0.732422V14.2676C8.23242 14.4618 8.15526 14.6481 8.0179 14.7855C7.88054 14.9228 7.69425 15 7.5 15Z" fill="#4DA390" />
                          <path class="accordion__ico-horizontal" d="M14.2676 8.23242H0.732422C0.538172 8.23242 0.351877 8.15526 0.214521 8.0179C0.0771657 7.88054 0 7.69425 0 7.5C0 7.30575 0.0771657 7.11946 0.214521 6.9821C0.351877 6.84474 0.538172 6.76758 0.732422 6.76758H14.2676C14.4618 6.76758 14.6481 6.84474 14.7855 6.9821C14.9228 7.11946 15 7.30575 15 7.5C15 7.69425 14.9228 7.88054 14.7855 8.0179C14.6481 8.15526 14.4618 8.23242 14.2676 8.23242Z" fill="#4DA390" />
                        </svg>
                      </div>
                    </div>
                    <div class="accordion__body">
                      <div class="accordion__body-inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio amet facilisi sed gravida at. Amet pellentesque elit, molestie convallis donec. Eget a dui gravida aliquet est. Turpis lorem placerat amet mauris. Hendrerit nulla viverra dolor eget massa risus est. Suspendisse mi aliquam risus, a porta sed. Non sit phasellus rhoncus amet, gravida ut nec in turpis. Pretium nulla bibendum at metus. Id habitasse nec, dapibus id vulputate tristique ut. Nunc urna et mi elit ac. Dapibus amet, egestas tristique eget phasellus et sapien, vehicula amet. Eu aliquet sit lorem urna pellentesque odio. Aliquam blandit etiam nam urna molestie proin.</p>
                        <p>Mi imperdiet gravida malesuada egestas eget et. Odio est orci volutpat aenean in. Volutpat, odio scelerisque at amet. Lectus libero semper phasellus dolor sed volutpat odio neque, integer. Turpis morbi urna at nullam. Vitae arcu pharetra vestibulum velit pellentesque vitae at id nisl. Odio egestas venenatis, enim cursus diam ipsum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion">
                    <div class="accordion__head">
                      <h3>How much does it cost to clean my home?</h3>
                      <div class="accordion__ico">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="accordion__ico-vertical" d="M7.5 15C7.30575 15 7.11946 14.9228 6.9821 14.7855C6.84474 14.6481 6.76758 14.4618 6.76758 14.2676V0.732422C6.76758 0.538172 6.84474 0.351877 6.9821 0.214521C7.11946 0.0771657 7.30575 0 7.5 0C7.69425 0 7.88054 0.0771657 8.0179 0.214521C8.15526 0.351877 8.23242 0.538172 8.23242 0.732422V14.2676C8.23242 14.4618 8.15526 14.6481 8.0179 14.7855C7.88054 14.9228 7.69425 15 7.5 15Z" fill="#4DA390" />
                          <path class="accordion__ico-horizontal" d="M14.2676 8.23242H0.732422C0.538172 8.23242 0.351877 8.15526 0.214521 8.0179C0.0771657 7.88054 0 7.69425 0 7.5C0 7.30575 0.0771657 7.11946 0.214521 6.9821C0.351877 6.84474 0.538172 6.76758 0.732422 6.76758H14.2676C14.4618 6.76758 14.6481 6.84474 14.7855 6.9821C14.9228 7.11946 15 7.30575 15 7.5C15 7.69425 14.9228 7.88054 14.7855 8.0179C14.6481 8.15526 14.4618 8.23242 14.2676 8.23242Z" fill="#4DA390" />
                        </svg>
                      </div>
                    </div>
                    <div class="accordion__body">
                      <div class="accordion__body-inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio amet facilisi sed gravida at. Amet pellentesque elit, molestie convallis donec. Eget a dui gravida aliquet est. Turpis lorem placerat amet mauris. Hendrerit nulla viverra dolor eget massa risus est. Suspendisse mi aliquam risus, a porta sed. Non sit phasellus rhoncus amet, gravida ut nec in turpis. Pretium nulla bibendum at metus. Id habitasse nec, dapibus id vulputate tristique ut. Nunc urna et mi elit ac. Dapibus amet, egestas tristique eget phasellus et sapien, vehicula amet. Eu aliquet sit lorem urna pellentesque odio. Aliquam blandit etiam nam urna molestie proin.</p>
                        <p>Mi imperdiet gravida malesuada egestas eget et. Odio est orci volutpat aenean in. Volutpat, odio scelerisque at amet. Lectus libero semper phasellus dolor sed volutpat odio neque, integer. Turpis morbi urna at nullam. Vitae arcu pharetra vestibulum velit pellentesque vitae at id nisl. Odio egestas venenatis, enim cursus diam ipsum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion">
                    <div class="accordion__head">
                      <h3>How do I setup recurring cleanings?</h3>
                      <div class="accordion__ico">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="accordion__ico-vertical" d="M7.5 15C7.30575 15 7.11946 14.9228 6.9821 14.7855C6.84474 14.6481 6.76758 14.4618 6.76758 14.2676V0.732422C6.76758 0.538172 6.84474 0.351877 6.9821 0.214521C7.11946 0.0771657 7.30575 0 7.5 0C7.69425 0 7.88054 0.0771657 8.0179 0.214521C8.15526 0.351877 8.23242 0.538172 8.23242 0.732422V14.2676C8.23242 14.4618 8.15526 14.6481 8.0179 14.7855C7.88054 14.9228 7.69425 15 7.5 15Z" fill="#4DA390" />
                          <path class="accordion__ico-horizontal" d="M14.2676 8.23242H0.732422C0.538172 8.23242 0.351877 8.15526 0.214521 8.0179C0.0771657 7.88054 0 7.69425 0 7.5C0 7.30575 0.0771657 7.11946 0.214521 6.9821C0.351877 6.84474 0.538172 6.76758 0.732422 6.76758H14.2676C14.4618 6.76758 14.6481 6.84474 14.7855 6.9821C14.9228 7.11946 15 7.30575 15 7.5C15 7.69425 14.9228 7.88054 14.7855 8.0179C14.6481 8.15526 14.4618 8.23242 14.2676 8.23242Z" fill="#4DA390" />
                        </svg>
                      </div>
                    </div>
                    <div class="accordion__body">
                      <div class="accordion__body-inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio amet facilisi sed gravida at. Amet pellentesque elit, molestie convallis donec. Eget a dui gravida aliquet est. Turpis lorem placerat amet mauris. Hendrerit nulla viverra dolor eget massa risus est. Suspendisse mi aliquam risus, a porta sed. Non sit phasellus rhoncus amet, gravida ut nec in turpis. Pretium nulla bibendum at metus. Id habitasse nec, dapibus id vulputate tristique ut. Nunc urna et mi elit ac. Dapibus amet, egestas tristique eget phasellus et sapien, vehicula amet. Eu aliquet sit lorem urna pellentesque odio. Aliquam blandit etiam nam urna molestie proin.</p>
                        <p>Mi imperdiet gravida malesuada egestas eget et. Odio est orci volutpat aenean in. Volutpat, odio scelerisque at amet. Lectus libero semper phasellus dolor sed volutpat odio neque, integer. Turpis morbi urna at nullam. Vitae arcu pharetra vestibulum velit pellentesque vitae at id nisl. Odio egestas venenatis, enim cursus diam ipsum.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="faq__img">
                <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/fag_img.png">
              </div>
            </div>
          </div>
        </section>
  </main>

	

<?php
// get_sidebar();
get_footer();
