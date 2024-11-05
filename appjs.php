 
<script> 
const getCompanies = async () => {
  try {
    const showdata = document.querySelector("#data-showing");
    let html = "";  

    const res = await fetch("php/get-companies.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });

    const output = await res.json();  

    if (output.length === 0) { 
      html = "<div>Record Not Found</div>";
    } else { 
      output.forEach((value) => {
        html += `           
                <tr>
                  <td>${value.company} </td>
                  <td>${value.ranking} </td>
                  <td>${value.stock_ticker} </td> 
                  <td>${value.industry} </td>
                  <td>${value.country} </td>
                  <td>${value.phone} </td>
                  <td>${value.corporate_website} </td>     
  
              </tr>
          `;
      });
    }

    showdata.innerHTML = html;  
  } catch (error) {
    console.log("error " + error);  
  }
};

getCompanies();
  

  const searchInput = document.getElementById('searchInput');
    const voiceButton = document.getElementById('voiceButton'); 
    if ('webkitSpeechRecognition' in window) {
      const recognition = new webkitSpeechRecognition();
      recognition.continuous = false;
      recognition.interimResults = false;
      recognition.lang = 'en-US';  

      voiceButton.addEventListener('click', () => {
        recognition.start(); 
      });

      recognition.onresult = (event) => {
        const transcript = event.results[0][0].transcript;
        searchInput.value = transcript;  
        searchCompanies(transcript);  
      };

      recognition.onerror = (event) => {
        console.error('Speech recognition error:', event.error);
      };
    } else {
      alert("Your browser does not support voice recognition.");
    }

    function searchCompanies(query) {
    
      if (query) {
          fetch(`php/search.php?query=${encodeURIComponent(query)}`)
              .then(response => response.json())
              .then(data => {
                  let html = '';  
                  data.forEach((value) => {
                    html += `           
                         <tr>
                          <td>${value.company} </td>
                          <td>${value.ranking} </td>
                          <td>${value.stock_ticker} </td> 
                          <td>${value.industry} </td>
                          <td>${value.country} </td>
                          <td>${value.phone} </td>
                          <td>${value.corporate_website} </td>     
          
                      </tr>
                      `;
                  });
               
                  const showdata = document.querySelector("#data-showing"); 
                  showdata.innerHTML = html;  
              })
              .catch(error => {
                  console.error('Error:', error);
              });
      }
  }

     document.getElementById("searchInput").addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            const query = this.value.trim(); 
            searchCompanies(query);
        }
    });

 

 
</script>
 

<style>
  .imageone{
    display: inline-block;
    background: #ffffff;
    border-radius: 28px;
    width: calc(183px + 3mm + 3mm);
    padding: 3mm 3mm 3mm 3mm;
    margin: 3mm 3mm 3mm 3mm;
  }
  .imagetwo{
    height: 103px;
    width: 183px;
    border-radius: 28px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;   
    margin-bottom: calc(3mm - 1px);
  }
  .imageheight{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 183px;
  }
</style>


<style>
  .search-container {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .search-input {
    border: none;
    padding: 15px 20px;
    font-size: 16px;
    outline: none;
    flex: 1;
  }

  .voice-button {
    background-color: #fff;
    border: none;
    padding: 14px 15px;
    color: white;
    cursor: pointer;
    border-radius: 0 25px 25px 0;
    transition: background-color 0.3s;
  }

 
 
</style>
