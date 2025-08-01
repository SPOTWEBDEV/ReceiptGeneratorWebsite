<?php


include('../../../server/connection.php');

$template_id = isset($_GET['template_id']) ? $_GET['template_id'] : 0;


$query = mysqli_query($connection, "SELECT `html_contents` FROM `template` WHERE `template_id` = '$template_id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="./template-1.css">
         <link rel="stylesheet"
                  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
         <title>Document</title>
</head>

<body style="box-sizing:border-box " class="h-screen">

         <style>
                  @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");



                  label,
                  button {
                           cursor: pointer;
                  }

                  figure {
                           margin-inline: 0;
                           margin-block: 0.25rem;
                  }



                  input[type="checkbox"] {
                           display: none;
                  }

                  body {
                           font-family: "Poppins", sans-serif;
                           background: #E9EFEF;
                  }

                  :root {
                           --bg--primary: #E9EFEF;
                           ;
                           --expanded: 16.875rem;
                           --collapsed: 3.25rem;
                           --svg: 1.125rem;
                           --item: 2.25rem;
                           --brad-outer: 0.75rem;
                           --frame-space: 0.5rem;
                           --brad-inner: calc(var(--brad-outer) - var(--frame-space));
                  }



                  .sidenavBar {
                           background: var(--bg--primary);
                           flex-flow: column;
                           border-radius: var(--brad-outer);
                           flex: 0 0 auto;
                           transition: flex-basis 300ms ease-out;
                           will-change: flex-basis;
                           padding: var(--frame-space);
                           box-shadow: 0 3px 5px #1233, 0 5px 17px #0003;
                  }



                  header {
                           display: flex;
                           flex-flow: column;
                           justify-content: center;
                           gap: 0.5rem;
                  }

                  .sidebar__toggle-container {
                           block-size: var(--item);
                           display: flex;
                           justify-content: end;
                  }

                  .nav__toggle {
                           block-size: 100%;
                           background: none;
                           transition: all 233ms ease-in;
                           border-radius: var(--brad-inner);
                           outline: 2px solid transparent;
                           outline-offset: -2px;
                           overflow: hidden;
                  }

                  .toggle--icons {
                           block-size: inherit;
                           aspect-ratio: 1;
                           display: inline-grid;
                           place-content: center;
                           grid-template-areas: "svg";
                           z-index: 10;
                  }

                  .toggle-svg-icon {
                           grid-area: svg;
                           fill: var(--gray--primary);
                           transition: fill 233ms ease-in;
                  }

                  .nav__toggle:hover {
                           outline: 2px solid var(--accent--primary);
                  }

                  .toggle--icons:hover .toggle-svg-icon {
                           fill: var(--dark--primary);
                  }

                  figure {
                           display: flex;
                           flex-direction: column;
                           justify-content: center;
                           container-type: inline-size;
                           gap: 0.375rem;
                  }

                  .codepen-logo {
                           margin-inline: auto;
                           display: block;
                           min-inline-size: 2.25rem;
                           max-inline-size: 45cqi;
                           aspect-ratio: 1;
                           block-size: 100%;
                           object-fit: cover;
                           transition: width 100ms linear;
                  }

                  figcaption {
                           text-align: center;
                  }

                  .user-id {
                           font-size: 1.0625rem;
                           font-weight: 500;
                           margin-block-end: 0.25rem;
                           color: var(--gray--secondary);
                  }

                  .user-role {
                           font-size: 0.875rem;
                           font-weight: 500;
                           color: var(--gray--primary);
                  }

                  .sidebar__wrapper {
                           --list-gap: 0.5rem;
                           display: flex;
                           flex-flow: column;
                           gap: var(--list-gap);
                  }

                  .sidebar__list {
                           margin: 0;
                           padding: 0;
                           list-style: none;
                           display: flex;
                           flex-flow: column;
                           gap: 0.125rem;
                           overflow: hidden;
                  }

                  .sidebar__item {
                           block-size: var(--item);
                           border-radius: var(--brad-inner);
                  }

                  .item--heading {
                           display: flex;
                           align-items: end;
                  }

                  .sidebar__item--heading {
                           margin-block-end: 0.4rem;
                           font-size: 0.75rem;
                           text-transform: uppercase;
                           letter-spacing: 0.35px;
                           font-weight: 500;
                           color: var(--gray--primary);
                           transition: color 200ms ease-in;
                  }

                  .sidebar__list:has(.sidebar__link):hover .sidebar__item--heading {
                           color: var(--gray--secondary);
                  }

                  .sidebar__link {
                           display: flex;
                           text-decoration: none;
                           block-size: 100%;
                           align-items: center;
                           gap: 0.5rem;
                           outline: 2px solid transparent;
                           border-radius: inherit;
                  }

                  .icon {
                           aspect-ratio: 1;
                           block-size: 100%;
                           display: inline-grid;

                           svg {
                                    place-self: center;
                                    inline-size: var(--svg);
                                    block-size: var(--svg);
                                    fill: var(--gray--primary);
                           }
                  }

                  .text {
                           pointer-events: none;
                           color: var(--gray--secondary);
                           font-size: 0.875em;
                           font-weight: 500;
                           transition: color 266ms ease-out;
                  }

                  .sidebar__link:hover {
                           background: var(--bg--hover);

                           .icon svg {
                                    fill: var(--accent--primary);
                           }

                           .text {
                                    color: var(--dark--primary);
                           }
                  }

                  .sidebar__link:focus {
                           outline: 2px solid var(--accent--secondary);
                           outline-offset: -2px;
                           background: var(--bg--focus);

                           .icon svg {
                                    fill: var(--accent--primary);
                           }
                  }

                  .sidebar__link:active {
                           background-color: var(--bg--active);
                  }

                  aside:not(:has(:checked)) .toggle--open,
                  aside:has(:checked) .toggle--close {
                           opacity: 0;
                  }

                  aside:not(:has(:checked)) :where(figcaption, .item--heading) {
                           opacity: 0;
                  }

                  aside:has(:checked) :where(figcaption, .item--heading) {
                           transition: opacity 300ms ease-in 200ms;
                  }

                  [data-tooltip]::before {
                           content: attr(data-tooltip);
                           position: fixed;
                           translate: calc(var(--item) * 1.5) calc(var(--item) * 0.125);
                           border-radius: var(--brad-inner);
                           padding: 0.125rem 0.5rem;
                           color: #ddd;
                           background-color: hsl(198 16 30);
                           box-shadow: 0 6px 12px -6px #0003;
                           opacity: 0;
                           pointer-events: none;
                           scale: 0 0;
                           z-index: 999;
                           font-size: 0.75rem;
                           font-weight: 500;
                           transition: all 350ms ease-out;
                  }

                  aside:not(:has(:checked)) .sidebar__link:where(:hover, :focus-visible)[data-tooltip]::before {
                           opacity: 1;
                           scale: 1;
                  }
         </style>

         <style>
                  .sliderset {
                           margin-top: 70px;
                  }

                  .slider {
                           position: relative;
                           margin: 10px auto;
                           width: 100%;
                           display: block;
                           background: #565656;
                           height: 7px;
                           box-shadow:
                                    0 1px 0px rgba(255, 255, 255, 0.25),
                                    inset 0 0 4px rgba(0, 0, 0, 0.9);
                           border-radius: 7px;
                  }

                  .slider div.ui-slider-range {
                           display: block;
                           height: 7px;
                           border-radius: 7px;
                           transition-property: background-color;
                           transition-duration: 100ms;
                  }

                  .slider.red div.ui-slider-range {
                           background-color: rgb(230, 158, 155);
                           box-shadow:
                                    inset 0 0 4px rgba(163, 18, 0, 0.7),
                                    inset 0 0 2px rgba(0, 0, 0, 0.5);
                  }

                  .slider.red div.ui-slider-range.hilite,
                  .slider.red div.ui-slider-range.dragging {
                           background-color: rgb(255, 160, 155);
                  }

                  .slider.blue div.ui-slider-range {
                           background-color: #9FD0E9;
                           box-shadow:
                                    inset 0 0 4px rgba(0, 85, 151, 0.8),
                                    inset 0 0 2px rgba(0, 0, 0, 0.5);
                  }

                  .slider.blue div.ui-slider-range.hilite,
                  .slider.blue div.ui-slider-range.dragging {
                           background-color: rgb(159, 213, 255);
                  }

                  .slider.green div.ui-slider-range {
                           background-color: #9edbbc;
                           box-shadow:
                                    inset 0 0 4px rgba(19, 121, 72, 0.8),
                                    inset 0 0 2px rgba(0, 0, 0, 0.5);
                  }

                  .slider.green div.ui-slider-range.hilite,
                  .slider.green div.ui-slider-range.dragging {
                           background-color: rgb(158, 231, 194);
                  }

                  .slider.black div.ui-slider-range {
                           background-color: #aaaaaa;
                           box-shadow:
                                    inset 0 0 4px rgba(24, 24, 24, 0.8),
                                    inset 0 0 2px rgba(0, 0, 0, 0.5);
                  }

                  .slider.black div.ui-slider-range.hilite,
                  .slider.black div.ui-slider-range.dragging {
                           background-color: #bbbbbb;
                  }

                  .slider.white div.ui-slider-range {
                           background-color: #e3e3e3;
                           box-shadow:
                                    inset 0 0 4px rgba(88, 88, 88, 0.5),
                                    inset 0 0 2px rgba(0, 0, 0, 0.3);
                  }

                  .slider.white div.ui-slider-range.hilite,
                  .slider.white div.ui-slider-range.dragging {
                           background-color: #f0f0f0;
                  }

             /*      .slider a.ui-slider-handle {
                           position: absolute;
                           top: -5px;
                           margin-left: -9px;
                           z-index: 2;
                           height: 16px;
                           width: 16px;
                           border-radius: 20px;
                           background-color: #d4d4d4;
                           background-image: url('https://s3.amazonaws.com/codepen/chrome_radial.jpg');
                           background-size: 100% 100%;
                           border: 0px solid rgba(0, 0, 0, 0.1);
                           box-shadow:
                                    0 0px 2px rgba(0, 0, 0, 0.4),
                                    inset 0 0px 1px rgba(0, 0, 0, 0.3),
                                    0 1px 2px rgba(0, 0, 0, 0.6),
                                    0 4px 2px rgba(0, 0, 0, 0.2),
                                    0 9px 4px rgba(0, 0, 0, 0.1),
                                    inset 0 2px 1px rgba(255, 255, 255, 1.0);
                           outline: none;
                  } */

                  .slider a.ui-slider-handle:after {
                           content: "";
                           position: absolute;
                           width: 15px;
                           height: 15px;
                           left: -1px;
                           top: -4px;
                           border-radius: 12px;
                           background-image: radial-gradient(rgba(255, 255, 255, 1.0), rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.0));
                  }
         </style>

         <style>
                  .sidenavBar {
                           width: 150px;
                  }

                  .main-content {
                           width: calc(100% - 450px);
                  }

                  .editor-nav {
                           width: 300px;

                  }

                  .model-container {
                           width: 90%;
                           height: 600px;
                  }

                  .bottom-nav {
                           overflow-x: auto;
                  }

                  @media(max-width:768px) {

                           .editor-nav {
                                    position: fixed;
                                    bottom: 0px;
                                    width: 100%;
                                    display: none;
                                    justify-content: center;
                                    z-index: 9999;
                                    height: 50vh;
                           }

                           .model-header {
                                    display: none;
                           }

                           .main-content {
                                    width: 100%;
                           }

                           .model-container {
                                    width: 100%;
                                    height: 400px;
                                    overflow-y: auto;
                           }


                  }


                  .tab-btn {
                           padding: 0.5rem 1rem;
                           border: 2px solid green;
                           cursor: pointer;
                           border-radius: 5px 5px 0 0;
                  }

                  .tab-btn.active {
                           background-color: white;
                  }

                  .modal.hidden {
                           display: none;
                  }

                  .noshrink {
                           flex-shrink: 0;
                  }

                  .bottom-nav-scroll::-webkit-scrollbar {
                           display: none;
                  }
         </style>




         <div class="bottom-nav  w-full bg-white border-t flex justify-around p-2 sm:hidden z-999">
                  <a href="#" class="flex flex-col items-center text-xs text-gray decoration-none">
                           <i class="bi bi-house text-lg mb-1"></i>
                           <span>Home</span>
                  </a>
                  <a href="#" class="flex flex-col items-center text-xs text-gray decoration-none">
                           <i class="bi bi-search text-lg mb-1"></i>
                           <span>Search</span>
                  </a>
                  <a href="#" class="flex flex-col items-center text-xs text-gray decoration-none">
                           <i class="bi bi-plus-circle text-lg mb-1"></i>
                           <span>Create</span>
                  </a>
                  <a href="#" class="flex flex-col items-center text-xs text-gray decoration-none">
                           <i class="bi bi-bell text-lg mb-1"></i>
                           <span>Alerts</span>
                  </a>
                  <a href="#" class="flex flex-col items-center text-xs text-gray decoration-none">
                           <i class="bi bi-person text-lg mb-1"></i>
                           <span>Profile</span>
                  </a>
         </div>
         <div class="body-container flex h-screen w-full">




                  <!-- <nav class="mx-2 my-2 sidenavBar hidden md:flex ">
                           <header>
                                    <div class="sidebar__toggle-container "> <label tabindex="0"
                                                      for="checkbox-input" id="label-for-checkbox-input"
                                                      class="nav__toggle"> <span
                                                               class="toggle--icons md:hidden"
                                                               aria-hidden="true"> <svg onclick="toggleNav()"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24"
                                                                        class="toggle-svg-icon toggle--close flex  md:hidden ">
                                                                        <path
                                                                                 d="M18.707 6.707a1 1 0 0 0-1.414-1.414L12 10.586 6.707 5.293a1 1 0 0 0-1.414 1.414L10.586 12l-5.293 5.293a1 1 0 1 0 1.414 1.414L12 13.414l5.293 5.293a1 1 0 0 0 1.414-1.414L13.414 12z">
                                                                        </path>
                                                               </svg> </span> </label> </div>
                                  
                           </header>
                           <section class="sidebar__wrapper">
                                    <ul class="sidebar__list list--primary">
                                             <li class="sidebar__item item--heading">
                                                      <h2 class="sidebar__item--heading">general</h2>
                                             </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Inbox">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-inbox"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374z" />
                                                                        </svg> </span> <span
                                                                        class="text">Inbox</span>
                                                      </a> </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Favourite"> <span class="icon">
                                                                        <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-star"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                                                        </svg> </span> <span
                                                                        class="text">Favourite</span> </a>
                                             </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Sent">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-send"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                                                                        </svg> </span> <span
                                                                        class="text">Sent</span>
                                                      </a> </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Draft">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-envelope-exclamation"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                                                                 <path
                                                                                          d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0m0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
                                                                        </svg> </span> <span
                                                                        class="text">Draft</span>
                                                      </a> </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Archive">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-archive"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                                        </svg> </span> <span
                                                                        class="text">Archive</span>
                                                      </a>
                                             </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Trash">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-trash"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                                 <path
                                                                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                        </svg> </span> <span
                                                                        class="text">Trash</span>
                                                      </a> </li>
                                    </ul>
                                    <ul class="sidebar__list list--secondary">
                                             <li class="sidebar__item item--heading">
                                                      <h2 class="sidebar__item--heading">general</h2>
                                             </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Profile">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-person-circle"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                                                                 <path fill-rule="evenodd"
                                                                                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                                                        </svg> </span> <span
                                                                        class="text">Profile</span>
                                                      </a>
                                             </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Settings"> <span class="icon">
                                                                        <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-gear"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path
                                                                                          d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                                                                 <path
                                                                                          d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                                                        </svg> </span> <span
                                                                        class="text">Settings</span> </a>
                                             </li>
                                             <li class="sidebar__item"> <a class="sidebar__link" href="#"
                                                               data-tooltip="Logout">
                                                               <span class="icon"> <svg width="16" height="16"
                                                                                 fill="currentColor"
                                                                                 class="bi bi-box-arrow-right"
                                                                                 viewBox="0 0 16 16">
                                                                                 <path fill-rule="evenodd"
                                                                                          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                                                 <path fill-rule="evenodd"
                                                                                          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                                                        </svg> </span> <span
                                                                        class="text">Logout</span>
                                                      </a>
                                             </li>
                                    </ul>
                           </section>
                  </nav> -->


                  <main class="main-content h-[100vh]  flex flex-col gap-2 justify-center items-center px-2 ">



                           <div class="holder h-[95vh] w-[95%] bg-red">
                                    <div style="height: 100%;" class="editor-holder border w-full   rounded overflow-auto p-4">
                                             <?php
                                             if (mysqli_num_rows($query)) {
                                                      $row = mysqli_fetch_assoc($query);
                                                      echo $row['html_contents'];
                                             } else {
                                                      echo "<p class='text-gray'>Template not found.</p>";
                                             }
                                             ?>
                                    </div>
                           </div>

                  </main>

                  <aside class="editor-nav h-screen justify-center  ">
                           <div style="background-color: var(--bg--primary); border-radius: 10px;"
                                    class="model-container  px-2 mt-2 overflow-y-auto ">

                                    <div class="model-header ">
                                             <!-- Tabs -->
                                             <div class="grid grid-cols-2 gap-1 justify-around bg-gray-200 text-sm font-semibold p-2 rounded-t">
                                                      <p onclick="switchModal('positionModal')" class="tab-btn active">Position</p>
                                                      <p onclick="switchModal('styleModal')" class="tab-btn">Style</p>
                                                      <p onclick="switchModal('elementModal')" class="tab-btn">Element</p>
                                                      <p onclick="switchModal('designModal')" class="tab-btn">Design</p>
                                                      <p onclick="switchModal('shareModal')" class="tab-btn">Share</p>
                                             </div>

                                    </div>


                                    <div id="positionModal" class="modal">
                                             <div class="modal-box">
                                                      <div class="flex justify-between items-center mt-2">
                                                               <h2 class="text-lg font-semibold text-gray">
                                                                        Position</h2>
                                                               <button onclick="closeModal('positionModal')"
                                                                        class="text-xl text-gray">&times;</button>
                                                      </div>

                                                      <!-- HEIGHT AND WIDTH -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Height And
                                                                        Width</h3>
                                                               <hr class="mt-1 mb-2">

                                                               <p class="text-xs mb-1">Height</p>
                                                               <div class="slider red" data-style="height">
                                                               </div>

                                                               <p class="text-xs mt-2 mb-1">Width</p>
                                                               <div class="slider blue" data-style="width">
                                                               </div>
                                                      </div>

                                                      <!-- PADDING -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Padding</h3>
                                                               <hr class="mt-1 mb-2">

                                                               <p class="text-xs mb-1">Top</p>
                                                               <div class="slider green"
                                                                        data-style="padding-top"></div>

                                                               <p class="text-xs mt-2 mb-1">Bottom</p>
                                                               <div class="slider black"
                                                                        data-style="padding-bottom">
                                                               </div>

                                                               <p class="text-xs mt-2 mb-1">Left</p>
                                                               <div class="slider white"
                                                                        data-style="padding-left">
                                                               </div>

                                                               <p class="text-xs mt-2 mb-1">Right</p>
                                                               <div class="slider white"
                                                                        data-style="padding-right">
                                                               </div>
                                                      </div>

                                                      <!-- MARGIN -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Margin</h3>
                                                               <hr class="mt-1 mb-2">

                                                               <p class="text-xs mb-1">Top</p>
                                                               <div class="slider green"
                                                                        data-style="margin-top"></div>

                                                               <p class="text-xs mt-2 mb-1">Bottom</p>
                                                               <div class="slider black"
                                                                        data-style="margin-bottom">
                                                               </div>

                                                               <p class="text-xs mt-2 mb-1">Left</p>
                                                               <div class="slider blue"
                                                                        data-style="margin-left"></div>

                                                               <p class="text-xs mt-2 mb-1">Right</p>
                                                               <div class="slider red"
                                                                        data-style="margin-right"></div>
                                                      </div>
                                             </div>

                                    </div>
                                    <div id="styleModal" class="modal hidden">
                                             <div class="modal-box">
                                                      <!-- Header -->
                                                      <div class="flex justify-between items-center mt-2">
                                                               <h2 class="text-lg font-semibold text-gray">
                                                                        Style</h2>
                                                               <button onclick="closeModal('styleModal')"
                                                                        class="text-xl text-gray">&times;</button>
                                                      </div>

                                                      <!-- Font Styles -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Font Styles
                                                               </h3>
                                                               <hr class="mt-1 mb-2">
                                                               <div class="grid grid-cols-3 gap-2">
                                                                        <button class="p-2 border rounded text-sm"
                                                                                 data-style="font-weight"
                                                                                 data-value="bold">Bold</button>
                                                                        <button class="p-2 border rounded text-sm"
                                                                                 data-style="text-decoration"
                                                                                 data-value="underline">Underline</button>
                                                                        <button class="p-2 border rounded text-sm"
                                                                                 data-style="font-style"
                                                                                 data-value="italic">Italic</button>
                                                               </div>
                                                      </div>

                                                      <!-- Text Transform -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Text
                                                                        Transform</h3>
                                                               <hr class="mt-1 mb-2">
                                                               <select class="w-full border rounded p-2 text-sm"
                                                                        data-style="text-transform">
                                                                        <option value="none">None</option>
                                                                        <option value="uppercase">Uppercase
                                                                        </option>
                                                                        <option value="lowercase">Lowercase
                                                                        </option>
                                                                        <option value="capitalize">Capitalize
                                                                        </option>
                                                               </select>
                                                      </div>

                                                      <!-- Typography Controls with Slider Divs -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Typography
                                                               </h3>
                                                               <hr class="mt-1 mb-2">

                                                               <p class="text-xs mb-1">Text Size</p>
                                                               <div class="slider red" data-style="font-size"
                                                                        data-unit="rem"></div>

                                                               <p class="text-xs mt-2 mb-1">Letter Spacing</p>
                                                               <div class="slider blue"
                                                                        data-style="letter-spacing"
                                                                        data-unit="em"></div>

                                                               <p class="text-xs mt-2 mb-1">Word Spacing</p>
                                                               <div class="slider green"
                                                                        data-style="word-spacing"
                                                                        data-unit="px"></div>
                                                      </div>

                                                      <!-- Text Align -->
                                                      <div class="mt-2">
                                                               <h3 class="text-sm font-bold mb-2">Text
                                                                        Alignment</h3>
                                                               <hr class="mt-1 mb-2">
                                                               <div class="flex flex-wrap gap-2">
                                                                        <button data-style="text-align"
                                                                                 data-value="left"
                                                                                 class="p-2 border rounded text-sm">Left</button>
                                                                        <button data-style="text-align"
                                                                                 data-value="center"
                                                                                 class="p-2 border rounded text-sm">Center</button>
                                                                        <button data-style="text-align"
                                                                                 data-value="right"
                                                                                 class="p-2 border rounded text-sm">Right</button>
                                                                        <button data-style="text-align"
                                                                                 data-value="justify"
                                                                                 class="p-2 border rounded text-sm">Justify</button>
                                                               </div>
                                                      </div>
                                             </div>
                                    </div>
                                    <!-- ELEMENT MODAL -->
                                    <div id="elementModal" class="modal hidden ">
                                             <div class="modal-box">
                                                      <div class="flex justify-between items-center mt-2">
                                                               <h2 class="text-lg font-semibold text-gray">
                                                                        Elements</h2>
                                                               <button onclick="closeModal('elementModal')"
                                                                        class="text-xl text-gray">&times;</button>
                                                      </div>

                                                      <div class="mt-2">
                                                               <label class="text-sm font-semibold block mb-1">Element
                                                                        Type</label>
                                                               <select id="elementType"
                                                                        class="w-full border rounded p-2 text-sm">
                                                                        <option value="p">Paragraph</option>
                                                                        <option value="h1">Heading 1</option>
                                                                        <option value="h3">Heading 3</option>
                                                                        <option value="img">Image</option>
                                                                        <option value="button">Button</option>
                                                                        <option value="link-button">Button
                                                                                 (with link)</option>
                                                               </select>
                                                      </div>

                                                      <div id="srcInput" class="mt-2 hidden">
                                                               <label class="text-sm font-semibold block mb-1">Image
                                                                        Source (src)</label>
                                                               <input type="text" id="elementSrc"
                                                                        class="w-full border rounded p-2 text-sm"
                                                                        placeholder="https://example.com/image.png" />
                                                      </div>

                                                      <div id="linkInput" class="mt-2 hidden">
                                                               <label class="text-sm font-semibold block mb-1">Link
                                                                        URL (for button)</label>
                                                               <input type="text" id="elementLink"
                                                                        class="w-full border rounded p-2 text-sm"
                                                                        placeholder="https://example.com" />
                                                      </div>

                                                      <div id="innerHtmlInput" class="mt-2">
                                                               <label class="text-sm font-semibold block mb-1">Text
                                                                        / Inner HTML</label>
                                                               <input value="Button" type="text"
                                                                        id="elementContent"
                                                                        class="w-full border rounded p-2 text-sm"
                                                                        placeholder="Enter text here" />
                                                      </div>

                                                      <div class="mt-2">
                                                               <label class="text-sm font-semibold block mb-1">Insert
                                                                        Position</label>
                                                               <select id="insertPosition"
                                                                        class="w-full border rounded p-2 text-sm">
                                                                        <option value="inside">Inside</option>
                                                                        <option value="before">Before</option>
                                                                        <option value="after">After</option>
                                                               </select>
                                                      </div>

                                                      <div class="mt-2 w-full text-right">
                                                               <button id="createElementBtn"
                                                                        class="border p-2 w-full rounded text-sm bg-hospital text-white">Create</button>
                                                      </div>


                                             </div>

                                    </div>

                                    <!-- DESIGN MODAL -->
                                    <div id="designModal" class="modal hidden ">
                                             <div class="modal-box">
                                                      <div class="flex justify-between items-center mt-2">
                                                               <h2 class="text-lg font-semibold text-gray">
                                                                        Design</h2>
                                                               <button onclick="closeModal('designModal')"
                                                                        class="text-xl text-gray">&times;</button>
                                                      </div>

                                                      <div class=" gap-2">
                                                               <img src="https://via.placeholder.com/100"
                                                                        class="rounded shadow-sm"
                                                                        alt="Design 1" />
                                                               <img src="https://via.placeholder.com/100"
                                                                        class="rounded shadow-sm"
                                                                        alt="Design 2" />
                                                               <img src="https://via.placeholder.com/100"
                                                                        class="rounded shadow-sm"
                                                                        alt="Design 3" />
                                                               <img src="https://via.placeholder.com/100"
                                                                        class="rounded shadow-sm"
                                                                        alt="Design 4" />
                                                               <img src="https://via.placeholder.com/100"
                                                                        class="rounded shadow-sm"
                                                                        alt="Design 5" />
                                                               <img src="https://via.placeholder.com/100"
                                                                        class="rounded shadow-sm"
                                                                        alt="Design 6" />
                                                      </div>
                                             </div>
                                    </div>

                                    <!-- SHARE MODAL -->
                                    <div id="shareModal" class="modal hidden ">
                                             <div class="modal-box">
                                                      <div class="flex justify-between items-center mt-2">
                                                               <h2 class="text-lg font-semibold text-gray">
                                                                        Share</h2>
                                                               <button onclick="closeModal('shareModal')"
                                                                        class="text-xl text-gray">&times;</button>
                                                      </div>

                                                      <p class="mt-2 text-sm text-gray">Click below to download
                                                               or save your project:</p>

                                                      <div class="flex flex-col gap-2">
                                                               <button
                                                                        class="p-2 px-4 border-none bg-hospital text-white rounded shadow text-sm">
                                                                        <i class="bi bi-download mr-1"></i>
                                                                        Download as PNG
                                                               </button>

                                                               <button onclick="saveHtml()"
                                                                        class="p-2 border-none px-4 bg-blue text-white rounded shadow text-sm">
                                                                        <i class="bi bi-save mr-1"></i> Save
                                                               </button>
                                                      </div>
                                             </div>
                                    </div>


                           </div>
                  </aside>

                  <div
                           class="bottom-nav fixed bottom-0 w-full bg-white border-t  justify-around p-2 lg:hidden z-999">
                           <a href="#" class="flex flex-col w-[100px] noshrink  items-center text-xs text-gray decoration-none">
                                    <i class="bi bi-house text-lg mb-1"></i>
                                    <span>Home</span>
                           </a>
                           <a href="#" class="flex flex-col w-[100px] noshrink  items-center text-xs text-gray decoration-none">
                                    <i class="bi bi-search text-lg mb-1"></i>
                                    <span>Search</span>
                           </a>
                           <a href="#" class="flex flex-col w-[100px] noshrink  items-center text-xs text-gray decoration-none">
                                    <i class="bi bi-plus-circle text-lg mb-1"></i>
                                    <span>Create</span>
                           </a>
                           <a href="#" class="flex flex-col w-[100px] noshrink  items-center text-xs text-gray decoration-none">
                                    <i class="bi bi-bell text-lg mb-1"></i>
                                    <span>Alerts</span>
                           </a>
                           <a href="#" class="flex flex-col w-[100px] noshrink  items-center text-xs text-gray decoration-none">
                                    <i class="bi bi-person text-lg mb-1"></i>
                                    <span>Profile</span>
                           </a>
                           <a href="#" class="flex flex-col w-[100px] noshrink  items-center text-xs text-gray decoration-none">
                                    <i class="bi bi-person text-lg mb-1"></i>
                                    <span>Profile</span>
                           </a>
                  </div>

         </div>

















         <script src="./template-1.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
         <script>
                  $(document).ready(function() {

                           function createHoverState(myobject) {
                                    myobject.hover(function() {
                                             $(this).prev().toggleClass('hilite');
                                    });
                                    myobject.mousedown(function() {
                                             $(this).prev().addClass('dragging');
                                             $("*").mouseup(function() {
                                                      $(myobject).prev().removeClass('dragging');
                                             });
                                    });
                           }

                           $(".slider").slider({
                                    orientation: "horizontal",
                                    range: "min",
                                    max: 100,
                                    value: 0,
                                    animate: 1300
                           });
                           $("#blue").slider("value", 100);
                           $('.slider').each(function(index) {
                                    $(this).slider("value", 75 - index * (50 / ($('.slider').length - 1)));
                           });

                           createHoverState($(".slider a.ui-slider-handle"));

                  });
         </script>


         <script>
                  let count = 0;

                  function toggleNav() {
                           count++
                           console.log('hghgg ' + count)
                           document.querySelector('.sidenavBar').classList.toggle('active-mobile')
                  }
         </script>
         <script>
                  function switchModal(idToShow) {
                           const modals = document.querySelectorAll(".modal");
                           modals.forEach(modal => {
                                    modal.classList.add("hidden");
                           });

                           // Remove "active" from all buttons
                           const tabs = document.querySelectorAll(".tab-btn");
                           tabs.forEach(tab => tab.classList.remove("active"));

                           // Show selected modal
                           document.getElementById(idToShow).classList.remove("hidden");

                           // Add active class to clicked button
                           const clickedTab = Array.from(tabs).find(tab =>
                                    tab.getAttribute("onclick").includes(idToShow)
                           );
                           clickedTab?.classList.add("active");
                  }
         </script>


</body>

</html>