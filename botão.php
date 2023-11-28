<html>
    <style>
.botao{
    display: flex;
    justify-content: center;
    place-items:center;
    height: 100vh;
    background: #1d2834;
}

.btn{
    width: 200px;
    height: 50px;
    font-weight: bold;
    font-size: 30px;
    border: none;
    border-radius: 1000px;
    color:#000;
    transition: all 0.6s ease-in-out 0s;
    box-shadow: inset 0 0 20px #000;
}
.btn:hover{
    background: transparent;
    color: aqua;
    transform: scale(1.5) rotate(360deg);
    box-shadow: 0 0 60px #602dbe;
    cursor: grab;
    border:#602dbe
}
    </style>
  <body>
          <div class="botao">
            <button class="btn">
            Comprar
            </button>
           </div>
  </body>

</html>