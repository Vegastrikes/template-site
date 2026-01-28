document.addEventListener('DOMContentLoaded', () => {
  const nav_button = document.querySelector('#mobile_navbar_button');
  const mobile_navbar = document.querySelector('#mobile_navbar');
  const popup_bg = document.querySelector('#popup_bg');
  const popup = document.querySelector('#popup');

  const popup_parent_languages = document.querySelector('#popup_parent_languages');
  const popup_languages = document.querySelector('#popup_languages');
  const popup_languages_list = document.querySelector('#popup_languages_list');

  const popup_parent_product = document.querySelector('#popup_parent_product');
  const popup_product = document.querySelector('#popup_product');
  const popup_product_list = document.querySelector('#popup_product_list');

  const popup_parent_services_solutions = document.querySelector('#popup_parent_services_solutions');
  const popup_services_solutions = document.querySelector('#popup_services_solutions');
  const popup_services_solutions_list = document.querySelector('#popup_services_solutions_list');

  const popup_parent_about_us = document.querySelector('#popup_parent_about_us');
  const popup_about_us = document.querySelector('#popup_about_us');
  const popup_about_us_list = document.querySelector('#popup_about_us_list');
  
  nav_button.addEventListener('click', () => {
      mobile_navbar.classList.remove('hidden');
  });
  
  popup_bg.addEventListener('click', () => {
     mobile_navbar.classList.add('hidden');
  });

  popup_languages.addEventListener('click', () => {
      if (popup_languages_list.classList.contains('hidden')) {
         popup_languages_list.classList.remove('hidden');
      } else {
         popup_languages_list.classList.add('hidden');
      }
  });
  popup_product.addEventListener('click', () => {
      if (popup_product_list.classList.contains('hidden')) {
         popup_product_list.classList.remove('hidden');
      } else {
         popup_product_list.classList.add('hidden');
      }
  });
  popup_services_solutions.addEventListener('click', () => {
     if (popup_services_solutions_list.classList.contains('hidden')) {
      popup_services_solutions_list.classList.remove('hidden');
      } else {
         popup_services_solutions_list.classList.add('hidden');
      }
  });
  popup_about_us.addEventListener('click', () => {
     if (popup_about_us_list.classList.contains('hidden')) {
         popup_about_us_list.classList.remove('hidden');
      } else {
         popup_about_us_list.classList.add('hidden');
      }
  });

});