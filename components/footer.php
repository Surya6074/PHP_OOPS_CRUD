
<style>
    /* input {
      margin: 10px 6px;
    } */
    .inp {
      margin: 10px 6px;
    }
    body{
      overflow: hidden;
    }
    label.error{
      color: red;
    }
    #alert{
      position: absolute;
      top: 10px;
      right: -420px;
      animation-name: alert;
      animation-duration: 6s;
    }
    @keyframes alert{
      0%{
        right: -420px;
      }

      40%{
        right: 20px;
      }
      60%{
        right: 20px;
      }
      100%{
        right: -420px;
      }
    }
  </style>
</html>
