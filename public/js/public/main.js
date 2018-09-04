var token = localStorage.getItem('token-login');
function checkLogin(link) {
  event.preventDefault();
  if(token) {
    $.ajax({
      type: 'GET',
      url: '/api/checkLoginToken',
      headers: ({
        Accept: 'application/json',
        Authorization: 'Bearer ' + token,
      }),
      success: function(response) {
        if(response.code == 200) {
          if(window.location.pathname !== link) {
            location.href = link;
          }
        }
      },
      error: function (response) {
        window.localStorage.removeItem('token-login');
        LoginPopup();
      }
    });
  } else {
    if(window.location.pathname != '/') {
      ModalRequestLogin();
      location.href = '/';
    }else{
      $('.login-form #modal-message').html(Lang.get('user/login.userInfo.messsage_request_login'));
      $('.login-form #modal-message').css('color','red');
      LoginPopup();
    }
  }
}
$(document).ready(function() {
  var tag;
  var b;
  $('#productSearch').on('submit', function (event) {
    event.preventDefault();
    query = $('#productSearch').find('input[name="name"]').val();
    url = api.products_index + "?name=" + query;
    window.location.href = url;
  });


  // $('#txtsearchFull').typeahead({
  //   name: 'suggest-employee',
  //   limit: 100,
  //   hint: false,
  //   remote: {
  //     rateLimitWait: 1000,
  //     url : 'api/products',
  //     replace: function (url, uriEncodedQuery){
  //       return url + "#" + uriEncodedQuery;
  //     },
  //     beforeSend: function (jqXhr, settings) {
  //       jqXhr.setRequestHeader('Content-Type','application/json');
  //       settings.type = 'POST';
  //       settings.hasContent = true;
  //       settings.data = JSON.stringify({"name": $('#txtsearchFull').val(), "name_match_status": "0"});
  //     },
  //     filter: function (data) {
  //       var result = data.employees;
  //       var sourceArr = [];
  //       $.each(result, function(index, object) {
  //         sourceArr.push(object.name);
  //       });
  //       return sourceArr;
  //     }
  //   }
  // }).bind('typeahead:selected', function(obj, selected, name) {
  //   $(this).typeahead('setQuery', $("<div/>").html(selected.value).text());
  //   return false;
  // });



  // bloodHound = new Bloodhound({
  //   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  //   queryTokenizer: Bloodhound.tokenizers.whitespace,
  //   remote: {
  //       url: 'api/products?name=%QUERY%',
  //       filter: function(data) {
  //         console.log(data);
  //           return data;
  //       },
  //       wildcard: "%QUERY"
  //   }
  // });
  // bloodHound.initialize();
  // $('#txtsearchFull').typeahead({
  // hint: true,
  // highlight: true,
  // minLength: 1,
  // },
  // {
  // name: 'name',
  // source: bloodHound.ttAdapter(),
  // displayKey: 'name',
  // });




  var engine = new Bloodhound({
    remote: {
        url: 'api/products?q=%QUERY%',
        wildcard: '%QUERY%'
    },
    datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
    queryTokenizer: Bloodhound.tokenizers.whitespace
  });

  $("#txtsearchFull").typeahead({
      hint: true,
      highlight: true,
      minLength: 1
  }, {
      source: engine.ttAdapter(),
      name: 'name',
      templates: {
          // empty: [
          //   '<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>',
          //   console.log('1'),
          // ],
          header: [
            // tag = document.createElement('div'),
            // tag.setAttribute('class', 'list-group search-results-dropdown'),
            // '<div class="list-groupp search-results-dropdown">',
          ],
          suggestion: function (data) {
            html = ''
            $.map(data,function(i,element){
              return '<a href="products/' + element.id + '" class="list-group-item">' + element.name + '</a>'
            });
            // data.forEach(result => {
            //   html+= '<a href="products/' + result.id + '" class="list-group-item">' + result.name + '</a>';
              // var z = document.createElement('a');
              // z.setAttribute('href', '/products/' + result.id);
              // z.innerHTML =  result.name;
              // console.log(z);
              // return z;
              // console.log(document.getElementsByClassName("list-group"));
              // $(".list-group").append(z);
              // document.getElementsByClassName("list-group").appendChild(z);
              // return document.body.appendChild(z);
              // console.log(document.getElementById("test"));
              // document.body.appendChild(z);
              // $(".list-group").innerHTML(z);
              // console.log(tag);
              // tag.appendChild(z);
              // console.log(tag.appendChild(z));
              // return tag;
              
            // });
    }
      }
  });
  

  


  $.ajax({
    url: "/api/categories",
    type: "get",
    success: function(result) {
      let html = '';
      result.result.forEach(category => {
        let childsHtml = '';
        if (category.children) {
          childsHtml += '<div class="list-menu">' +
                          '<ul class="list-inline">';
          category.children.forEach(childsCategory => {
            childsHtml += '<li><a href="'+api.products_index+"?category_id="+childsCategory.id+'">'+ childsCategory.name +'</a></li>';
          });
          childsHtml += '</ul>' +
                      '</div>';
        }
        if (category.children) {
          html += '<li class="menu-top">' +
                      '<a href="'+api.products_index+"?category_id="+category.id+'">'+category.name+'</a>';
          if (category.children) {
            html += childsHtml;
          }
          html +=  '</li>';
        }else {
          html += '<li>' +
                      '<a href="'+api.products_index+"?category_id="+category.id+'">'+category.name+'</a>';
          html +=  '</li>';
        }
      });
      $('#js-menu').append(html);
    }
  });
});
function formatNumber(number) {
  return new Intl.NumberFormat('de-DE').format(number);
}
