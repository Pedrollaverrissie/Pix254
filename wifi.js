
      const popup=document.getElementById("popup");
      const paymessage=document.getElementById("paymessage");
      const  phonenumber=document.getElementById("phonenumber");
      const alert1=document.getElementById("alert1");
      const processing=document.getElementById("processing");
      const loader=document.getElementById("loader");
      
      
      const recoform=document.getElementById("recoform")

     
     
     
    
      var amount;

     function pay1(amount=10){


      popup.classList.add("open-popup");
        paymessage.textContent=(`You are about to pay KSH. ${amount} for 2 Hours plan. Enter phonenumber below and click PAY NOW`)
       }                            
       function pay2(amount=20){
        let time=12
        
        paymessage.textContent=(`You are about to pay KSH. ${amount} for ${time} Hours plan. Enter phonenumber below and click PAY NOW`)
        popup.classList.add("open-popup");
       } 
       function pay3(amount=30){
        let time=12*2
        
        paymessage.textContent=(`You are about to pay KSH. ${amount} for ${time} Hours plan. Enter phonenumber below and click PAY NOW`)
        popup.classList.add("open-popup");
       } 
       function pay4(amount=100){
        let time=24
        
        paymessage.textContent=(`You are about to pay KSH. ${amount} for ${time} Hours plan. Enter phonenumber below and click PAY NOW`)
        popup.classList.add("open-popup");
       } 
       function pay5(amount=200){
        let time=7
        
        paymessage.textContent=(`You are about to pay KSH. ${amount} for ${time} Days plan. Enter phonenumber below and click PAY NOW`)
        popup.classList.add("open-popup");
       } 
       function pay6(amount=600){
        let time=1
        
        paymessage.textContent=(`You are about to pay KSH. ${amount} for ${time} Month plan. Enter phonenumber below and click PAY NOW`)
        popup.classList.add("open-popup");
       } 
       function pay7(amount=1000){
        let time=1
        
        paymessage.textContent=(`You are about to pay KSH. ${amount} for ${time} Month plan. Enter phonenumber below and click PAY NOW`)
        popup.classList.add("open-popup");
       } 
       
       function close1(){
        popup.classList.remove("open-popup");
       }

       function paynow(){

        const paystack=document.getElementById("paystack")
       


         let phone=phonenumber.value;
     
         if(phone==""){
         alert1.textContent=("❗ You need to write your phonenumber")
         phonenumber.style.borderColor="red";
         loader.classList.remove("open-loader");
     
         }
         else {
         
            popup.classList.remove("open-popup");
             processing.classList.add("open-processing")
             loader.classList.add("open-loader")
             setTimeout(function() {
         loader.classList.add('open-loader');
         loader.classList.remove('open-loader');
         setTimeout(() => {
             processing.classList.remove('open-processing');
 
         }, 50);
 
         setTimeout(() => {
        paystack.classList.add('open-paystack');
 
      }, 500);
 
         
         }, 5000);
       
         } 
        } 

        function voucher(){
             
          const vouchpop =document.getElementById("vouchpop")
          const input2=document.getElementById("input2")
           let in2=input2.value;
          if(in2==""){
            recopop.classList.add("open-recopop")

          }

          
          
        }

        function reconnect(){
          const recopop=document.getElementById("recopop")

          const input1=document.getElementById("input1")
           let in1=input1.value;
          if(in1==""){
            recopop.classList.add("open-recopop")

          }          
        }

        function ok1(){
          recopop.classList.remove("open-recopop")
        }
        function ok2(){
          vouchpop.classList.aremove(open-vouchpop)
        }
        function payWithPaystack(){
          const paystack=document.getElementById("paystack")
          paystack.classList.remove("open-paystack")
        }

      






       
      