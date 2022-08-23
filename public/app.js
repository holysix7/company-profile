function download(filename) {
  var result = false
  if(filename){
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>"
    var j=0;
    tab = document.getElementById('fikri-request')
    for(j = 0 ; j < tab.rows.length ; j++){     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>"
    }
    tab_text=tab_text+"</table>"

    var ua    = window.navigator.userAgent
    var msie  = ua.indexOf("MSIE ") 

    var element = document.createElement('a')
    element.setAttribute('href', 'data:application/vnd.ms-excel,' + encodeURIComponent(tab_text))
    element.setAttribute('download', filename)
  
    element.style.display = 'none'
    document.body.appendChild(element)
  
    element.click()
  
    document.body.removeChild(element)

    result = true
  }

  return result
}
