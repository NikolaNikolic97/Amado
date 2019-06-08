
(function ($) {
  // USE STRICT
  "use strict";

  try {


      try {
          //Sales chart
          var ctx = document.getElementById("sales-chart");
          if (ctx) {
              ctx.height = 150;
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
                      type: 'line',
                      defaultFontFamily: 'Poppins',
                      datasets: [{
                          label: "Foods",
                          data: [0, 30, 10, 120, 50, 63, 10],
                          backgroundColor: 'transparent',
                          borderColor: 'rgba(220,53,69,0.75)',
                          borderWidth: 3,
                          pointStyle: 'circle',
                          pointRadius: 5,
                          pointBorderColor: 'transparent',
                          pointBackgroundColor: 'rgba(220,53,69,0.75)',
                      }, {
                          label: "Electronics",
                          data: [0, 50, 40, 80, 40, 79, 120],
                          backgroundColor: 'transparent',
                          borderColor: 'rgba(40,167,69,0.75)',
                          borderWidth: 3,
                          pointStyle: 'circle',
                          pointRadius: 5,
                          pointBorderColor: 'transparent',
                          pointBackgroundColor: 'rgba(40,167,69,0.75)',
                      }]
                  },
                  options: {
                      responsive: true,
                      tooltips: {
                          mode: 'index',
                          titleFontSize: 12,
                          titleFontColor: '#000',
                          bodyFontColor: '#000',
                          backgroundColor: '#fff',
                          titleFontFamily: 'Poppins',
                          bodyFontFamily: 'Poppins',
                          cornerRadius: 3,
                          intersect: false,
                      },
                      legend: {
                          display: false,
                          labels: {
                              usePointStyle: true,
                              fontFamily: 'Poppins',
                          },
                      },
                      scales: {
                          xAxes: [{
                              display: true,
                              gridLines: {
                                  display: false,
                                  drawBorder: false
                              },
                              scaleLabel: {
                                  display: false,
                                  labelString: 'Month'
                              },
                              ticks: {
                                  fontFamily: "Poppins"
                              }
                          }],
                          yAxes: [{
                              display: true,
                              gridLines: {
                                  display: false,
                                  drawBorder: false
                              },
                              scaleLabel: {
                                  display: true,
                                  labelString: 'Value',
                                  fontFamily: "Poppins"

                              },
                              ticks: {
                                  fontFamily: "Poppins"
                              }
                          }]
                      },
                      title: {
                          display: false,
                          text: 'Normal Legend'
                      }
                  }
              });
          }


      } catch (error) {
          console.log(error);
      }

      try {
          //bar chart
          var ctx = document.getElementById("barChart");
          if (ctx) {
              ctx.height = 150;
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  defaultFontFamily: 'Poppins',
                  data: {
                      labels: ["January", "February", "March", "April", "May", "June", "July"],
                      datasets: [
                          {
                              label: "My First dataset",
                              data: [65, 59, 80, 81, 56, 55, 40],
                              borderColor: "rgba(0, 123, 255, 0.9)",
                              borderWidth: "0",
                              backgroundColor: "rgba(0, 123, 255, 0.5)",
                              fontFamily: "Poppins"
                          },
                          {
                              label: "My Second dataset",
                              data: [28, 48, 40, 19, 86, 27, 90],
                              borderColor: "rgba(0,0,0,0.09)",
                              borderWidth: "0",
                              backgroundColor: "rgba(0,0,0,0.07)",
                              fontFamily: "Poppins"
                          }
                      ]
                  },
                  options: {
                      legend: {
                          position: 'top',
                          labels: {
                              fontFamily: 'Poppins'
                          }

                      },
                      scales: {
                          xAxes: [{
                              ticks: {
                                  fontFamily: "Poppins"

                              }
                          }],
                          yAxes: [{
                              ticks: {
                                  beginAtZero: true,
                                  fontFamily: "Poppins"
                              }
                          }]
                      }
                  }
              });
          }


      } catch (error) {
          console.log(error);
      }


  }catch (error) {
      console.log(error);
}})(jQuery);



(function ($) {
    // USE STRICT
    "use strict";
    $(".animsition").animsition({
      inClass: 'fade-in',
      outClass: 'fade-out',
      inDuration: 900,
      outDuration: 900,
      linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])',
      loading: true,
      loadingParentElement: 'html',
      loadingClass: 'page-loader',
      loadingInner: '<div class="page-loader__spin"></div>',
      timeout: false,
      timeoutCountdown: 5000,
      onLoadEvent: true,
      browser: ['animation-duration', '-webkit-animation-duration'],
      overlay: false,
      overlayClass: 'animsition-overlay-slide',
      overlayParentElement: 'html',
      transition: function (url) {
        window.location.href = url;
      }
    });
  
  
  })(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Map
  try {

    var vmap = $('#vmap');
    if(vmap[0]) {
      vmap.vectorMap( {
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#1de9b6',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: [ '#1de9b6', '#03a9f5'],
        normalizeFunction: 'polynomial'
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Europe Map
  try {
    
    var vmap1 = $('#vmap1');
    if(vmap1[0]) {
      vmap1.vectorMap( {
        map: 'europe_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true
      });
    }

  } catch (error) {
    console.log(error);
  }

  // USA Map
  try {
    
    var vmap2 = $('#vmap2');

    if(vmap2[0]) {
      vmap2.vectorMap( {
        map: 'usa_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true,
        selectedColor: null,
        hoverColor: null,
        colors: {
            mo: '#001BFF',
            fl: '#001BFF',
            or: '#001BFF'
        },
        onRegionClick: function ( event, code, region ) {
            event.preventDefault();
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Germany Map
  try {
    
    var vmap3 = $('#vmap3');
    if(vmap3[0]) {
      vmap3.vectorMap( {
        map: 'germany_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        onRegionClick: function ( element, code, region ) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();

            alert( message );
        }
      });
    }
    
  } catch (error) {
    console.log(error);
  }
  
  // France Map
  try {
    
    var vmap4 = $('#vmap4');
    if(vmap4[0]) {
      vmap4.vectorMap( {
        map: 'france_fr',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Russia Map
  try {
    var vmap5 = $('#vmap5');
    if(vmap5[0]) {
      vmap5.vectorMap( {
        map: 'russia_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        hoverOpacity: 0.7,
        selectedColor: '#999999',
        enableZoom: true,
        showTooltip: true,
        scaleColors: [ '#C8EEFF', '#006491' ],
        normalizeFunction: 'polynomial'
      });
    }


  } catch (error) {
    console.log(error);
  }
  
  // Brazil Map
  try {
    
    var vmap6 = $('#vmap6');
    if(vmap6[0]) {
      vmap6.vectorMap( {
        map: 'brazil_br',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        onRegionClick: function ( element, code, region ) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
            alert( message );
        }
      });
    }

  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // Use Strict
  "use strict";
  try {
    var progressbarSimple = $('.js-progressbar-simple');
    progressbarSimple.each(function () {
      var that = $(this);
      var executed = false;
      $(window).on('load', function () {

        that.waypoint(function () {
          if (!executed) {
            executed = true;
            /*progress bar*/
            that.progressbar({
              update: function (current_percentage, $this) {
                $this.find('.js-value').html(current_percentage + '%');
              }
            });
          }
        }, {
            offset: 'bottom-in-view'
          });

      });
    });
  } catch (err) {
    console.log(err);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Scroll Bar
  try {
    var jscr1 = $('.js-scrollbar1');
    if(jscr1[0]) {
      const ps1 = new PerfectScrollbar('.js-scrollbar1');      
    }

    var jscr2 = $('.js-scrollbar2');
    if (jscr2[0]) {
      const ps2 = new PerfectScrollbar('.js-scrollbar2');

    }

  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Select 2
  try {

    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    });

  } catch (error) {
    console.log(error);
  }


})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Dropdown 
  try {
    var menu = $('.js-item-menu');
    var sub_menu_is_showed = -1;

    for (var i = 0; i < menu.length; i++) {
      $(menu[i]).on('click', function (e) {
        e.preventDefault();
        $('.js-right-sidebar').removeClass("show-sidebar");        
        if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = -1;
        }
        else {
          for (var i = 0; i < menu.length; i++) {
            $(menu[i]).removeClass("show-dropdown");
          }
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = jQuery.inArray(this, menu);
        }
      });
    }
    $(".js-item-menu, .js-dropdown").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
    });

  } catch (error) {
    console.log(error);
  }

  var wW = $(window).width();
    // Right Sidebar
    var right_sidebar = $('.js-right-sidebar');
    var sidebar_btn = $('.js-sidebar-btn');

    sidebar_btn.on('click', function (e) {
      e.preventDefault();
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
      right_sidebar.toggleClass("show-sidebar");
    });

    $(".js-right-sidebar, .js-sidebar-btn").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      right_sidebar.removeClass("show-sidebar");

    });
 

  // Sublist Sidebar
  try {
    var arrow = $('.js-arrow');
    arrow.each(function () {
      var that = $(this);
      that.on('click', function (e) {
        e.preventDefault();
        that.find(".arrow").toggleClass("up");
        that.toggleClass("open");
        that.parent().find('.js-sub-list').slideToggle("250");
      });
    });

  } catch (error) {
    console.log(error);
  }


  try {
    // Hamburger Menu
    $('.hamburger').on('click', function () {
      $(this).toggleClass('is-active');
      $('.navbar-mobile').slideToggle('500');
    });
    $('.navbar-mobile__list li.has-dropdown > a').on('click', function () {
      var dropdown = $(this).siblings('ul.navbar-mobile__dropdown');
      $(this).toggleClass('active');
      $(dropdown).slideToggle('500');
      return false;
    });
  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Load more
  try {
    var list_load = $('.js-list-load');
    if (list_load[0]) {
      list_load.each(function () {
        var that = $(this);
        that.find('.js-load-item').hide();
        var load_btn = that.find('.js-load-btn');
        load_btn.on('click', function (e) {
          $(this).text("Loading...").delay(1500).queue(function (next) {
            $(this).hide();
            that.find(".js-load-item").fadeToggle("slow", 'swing');
          });
          e.preventDefault();
        });
      })

    }
  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  try {
    
    $('[data-toggle="tooltip"]').tooltip();

  } catch (error) {
    console.log(error);
  }

  // Chatbox
  try {
    var inbox_wrap = $('.js-inbox');
    var message = $('.au-message__item');
    message.each(function(){
      var that = $(this);

      that.on('click', function(){
        $(this).parent().parent().parent().toggleClass('show-chat-box');
      });
    });
    

  } catch (error) {
    console.log(error);
  }

})(jQuery);

//delete for user-a

function users(){
    let users = [];

    function removeUser(id){
        $.ajax({
            url:baseUrl+'/admin/users/'+id,
            method : "delete",
            data:{
                _token : csrf
            },
            success:function (data) {
                console.log(data);
                getAll();
            }
        })
    }

    function table(){
        let table = generateTableHeadings();
        for (user of users){
            table +=generateTableRow(user);
        }
        table += '</tbody></table>';
        return table;
    }

    function generateTableHeadings() {
        return `<table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Token</th>
                        </tr>
                    </thead>    
                `
    }
    function generateTableRow(user) {
        return `
                     <tbody>
                        <tr class="tr-shadow">
                            <td>${user.full_name}</td>
                            <td>
                                <span class="block-email">${user.email}</span>
                            </td>
                            <td class="desc">${user.user_name}</td>
                            <td>${user.role}</td>
                            <td>
                                <span class="status--process">${user.activated} </span>
                            </td>
                            <td>${user.token}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="${baseUrl+'/admin/users/'+user.user_id+'/edit'}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                    </a>
                                    <button onclick="deleteUser(${user.user_id})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>`
    }
    function getAll(){
        $.ajax({
            url:baseUrl+"/api/users",
            method:'get',
            success:function (data) {
                users = data;
                 document.querySelector("#tabelaUsers").innerHTML = table();
            },
            error:function(xhr,status,msg){
                console.log(xhr.responseText);
    }
        })
    }

    return {
        getAll,removeUser
    }
}

//delete for menu


function menu(){
    let menus = [];

    function getAll(){
        $.ajax({
            url:baseUrl+"/api/menus",
            method:'get',
            success:function (data) {
                menus = data;
                document.querySelector("#tabelaMenu").innerHTML = table();
            },
            error:function(xhr,status,msg){
                console.log(xhr.responseText);
            }
        })
    }

    function removeMenu(id){
        $.ajax({
            url:baseUrl+'/admin/menu/'+id,
            method : "delete",
            data:{
                _token : csrf
            },
            success:function (data) {
                getAll();
            }
        })
    }

    function table(){
        let table = generateTableHeadings();
        for (m of menus){
            table +=generateTableRow(m);
        }
        table += '</tbody></table>';
        return table;
    }

    function generateTableHeadings() {
        return `<table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Href</th>
                            <th>Content</th>
                        </tr>
                    </thead>    
                `
    }
    function generateTableRow(m) {
        return `
                     <tbody>
                        <tr class="tr-shadow">
                            <td>${m.href}</td>
                            <td>${m.content}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="${baseUrl+'/admin/menu/'+m.id+'/edit'}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                    </a>
                                    <button onclick="deleteMenu(${m.id})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>`
    }


    return {
        getAll,removeMenu
    }
}

//delete for brands

function brands(){
    let brands = [];

    function getAll(){
        $.ajax({
            url:baseUrl+"/api/brands",
            method:'get',
            success:function (data) {
                brands = data;
                document.querySelector("#tabelaBrands").innerHTML = table();
            },
            error:function(xhr,status,msg){
            }
        })
    }

    function removeBrand(id){
        $.ajax({
            url:baseUrl+'/admin/brands/'+id,
            method : "delete",
            data:{
                _token : csrf
            },
            success:function (data) {
                getAll();
            }
        })
    }

    function table(){
        let table = generateTableHeadings();
        for (br of brands){
            table +=generateTableRow(br);
        }
        table += '</tbody></table>';
        return table;
    }

    function generateTableHeadings() {
        return `<table class="table table-data2">
                    <thead>
                        <tr>
                            <th>NAME OF BRAND</th>
                        </tr>
                    </thead>    
                `
    }
    function generateTableRow(br) {
        return `
                     <tbody>
                        <tr class="tr-shadow">
                            <td>${br.brand}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="${baseUrl+'/admin/brands/'+br.id+'/edit'}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                    </a>
                                    <button onclick="deleteBrand(${br.id})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>`
    }


    return {
        getAll,removeBrand
    }
}

//delete for brands

function categories(){
    let categories = [];

    function getAll(){
        $.ajax({
            url:baseUrl+"/api/categories",
            method:'get',
            success:function (data) {
                categories = data;
                document.querySelector("#tabelaCategories").innerHTML = table();
            },
            error:function(xhr,status,msg){
            }
        })
    }

    function removeCategory(id){
        $.ajax({
            url:baseUrl+'/admin/categories/'+id,
            method : "delete",
            data:{
                _token : csrf
            },
            success:function (data) {
                getAll();
            }
        })
    }

    function table(){
        let table = generateTableHeadings();
        for (cat of categories){
            table +=generateTableRow(cat);
        }
        table += '</tbody></table>';
        return table;
    }

    function generateTableHeadings() {
        return `<table class="table table-data2">
                    <thead>
                        <tr>
                            <th>NAME OF CATEGORY</th>
                        </tr>
                    </thead>    
                `
    }
    function generateTableRow(cat) {
        return `
                     <tbody>
                        <tr class="tr-shadow">
                            <td>${cat.category}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="${baseUrl+'/admin/categories/'+cat.id+'/edit'}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                    </a>
                                    <button onclick="deleteCategory(${cat.id})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>`
    }


    return {
        getAll,removeCategory
    }
}

//delete for posts

function posts(){
    let posts = [];
    let img = [];

    function getAll(){
        $.ajax({
            url:baseUrl+"/api/posts",
            method:'get',
            success:function (data) {
                posts = data;
                document.querySelector("#tabelaPosts").innerHTML = table(img);
            },
            error:function(xhr,status,msg){
                console.log(xhr.responseText);
            }
        })
    }
    function getAllImages(){
        $.ajax({
            url:baseUrl+"/api/images",
            method:'get',
            success:function (data) {
                img = data;
            },
            error:function(xhr,status,msg){
                console.log(xhr.responseText);
            }
        })
    }

    function removePost(id){
        $.ajax({
            url:baseUrl+'/admin/posts/'+id,
            method : "delete",
            data:{
                _token : csrf
            },
            success:function (data) {
                getAllImages();
                getAll();
            }
        })
    }

    function table(img){
        let table = generateTableHeadings();
        for (post of posts){
            table +=generateTableRow(post,img);
        }
        table += '</tbody></table>';
        return table;
    }

    function generateTableHeadings() {
        return `<table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Quantity</th>
                            <th>Img</th>
                        </tr>
                    </thead>    
                `
    }
    function generateTableRow(post,img) {
        let sadrzaj =  `
                     <tbody>
                        <tr class="tr-shadow">
                                <td>${post.description}</td>
                                <td>${post.name}</td>
                                <td class="desc">${post.price}</td>
                                <td>${post.category}</td>
                                <td>${post.brand}</td>
                                <td class="desc">${post.quantity}</td>`
                                for(i of img) {
                                    if (post.id_post == i.id_post)
                                        sadrzaj += `<td><img src="${i.src}" alt="${i.alt}"> </td>`

                                }
                               sadrzaj += `<td>
                                    <div class="table-data-feature">
                                        <a href="${baseUrl+'/admin/posts/'+post.id+'/edit'}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                        </a>
                                        <button onclick="deletePost(${post.id})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>`
        return sadrzaj;
    }

    return {
        getAll,removePost
    }
}

//delete for images

function images(){
    let posts = [];
    let img = [];

    function getAll(){
        $.ajax({
            url:baseUrl+"/api/posts",
            method:'get',
            success:function (data) {
                posts = data;
                document.querySelector("#tabelaImages").innerHTML = table(posts);
            },
            error:function(xhr,status,msg){
                console.log(xhr.responseText);
            }
        })
    }
    function getAllImages(){
        $.ajax({
            url:baseUrl+"/api/images",
            method:'get',
            success:function (data) {
                img = data;
            },
            error:function(xhr,status,msg){
                console.log(xhr.responseText);
            }
        })
    }

    function removeImg(id){
        $.ajax({
            url:baseUrl+'/admin/images/'+id,
            method : "delete",
            data:{
                _token : csrf
            },
            success:function (data) {
                getAllImages();
                getAll();
            }
        })
    }

    function table(post){
        let table = generateTableHeadings();
        for (image of img){
            table +=generateTableRow(post,image);
        }
        table += '</tbody></table>';
        return table;
    }

    function generateTableHeadings() {
        return `<table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Source</th>
                            <th>Alt</th>
                            <th>Image</th>
                            <th>Post</th>
                            
                        </tr>
                    </thead>    
                `
    }
    function generateTableRow(post,img) {
        let sadrzaj =  `
                     <tbody>
                        <tr class="tr-shadow">
                                <td>${img.src}</td>
                                <td>${img.alt}</td>
                                <td><img style="width: 200px;" src="${img.src}" alt="${img.alt}"> </td>
                       `
        for(p of post) {
            if (post.id_post == img.id_post)
                sadrzaj += `<td>${post.name}</td>`

        }
        sadrzaj += `<td>
                                    <div class="table-data-feature">
                                        <a href="${baseUrl+'/admin/images/'+img.id+'/edit'}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit  zmdi-hc-3x"></i>
                                        </a>
                                        <button onclick="deleteImage(${img.id})"  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete  zmdi-hc-3x"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>`
        return sadrzaj;
    }

    return {
        getAll,removeImg
    }
}

function deleteImage(id) {
    const img =  images();
    img.removeImg(id);
}

function deletePost(id){
  const post = posts();
  post.removePost(id);
}

function deleteCategory(id){
  const cat = categories();
  cat.removeCategory(id);
}

function deleteBrand(id) {
    const brand = brands();
    brand.removeBrand(id);
}

function deleteUser(id) {
    const user = users();
    user.removeUser(id);
}

function deleteMenu(id) {
    const user = menu();
    user.removeMenu(id);
}


//filtering with ajax

$('#submitFilter').on('click', function(event){
  event.preventDefault();
    let startString = $('#start').val();
    let endString = $('#end').val();
    $.ajax({
        url: baseUrl + '/api/filtersDate',
        method: 'get',
        data:{
            start:startString,
            end:endString
        },
        success: function (data) {
            //console.log(data);
            let table = document.getElementById('tabelaActions');
            let sadrzaj = '';
            sadrzaj += `
              <table  class="table table-data2">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                 `
                      for (d of data){
                      let time = new Date(d.date*1000).toLocaleDateString();
              sadrzaj += `
                                <tr class="tr-shadow">
                                <td>${d.full_name}</td>
                                <td>${d.email}</td>
                                <td>${d.action}</td>
                                <td>${time}</td>
                            </tr>
                            <tr class="spacer"></tr>
                            `
                      }
              sadrzaj +=`
                        </tbody>
                    </table>
            `;
            //console.log(sadrzaj);
            table.innerHTML = sadrzaj;
        },
        error: function (xhr, status, errMsg) {

        }
    });
});
