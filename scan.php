<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
            integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <title>QR Code</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                padding: 0;
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }

            .input-group {
                position: relative;
            }

            .input {
                border: solid 1.5px #9e9e9e;
                border-radius: 1rem;
                background: none;
                margin: 10px;
                padding: 1rem;
                font-size: 1rem;
                color: #000000;
                transition: border 150ms cubic-bezier(0.4, 0, 0.2, 1);
            }

            .user-label {
                position: absolute;
                left: 15px;
                color: #e8e8e8;
                pointer-events: none;
                transform: translateY(1rem);
                transition: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            }

            .input:focus,
            input:valid {
                outline: none;
                border: 1.5px solid #1a73e8;
            }

            .input:focus ~ label,
            input:valid ~ label {
                transform: translateY(-50%) scale(0.8);
                background-color: #212121;
                padding: 0 0.2em;
                color: #2196f3;
            }

            .btn {
  --border-color: linear-gradient(-45deg, #ffae00, #7e03aa, #00fffb);
  --border-width: .125em;
  --curve-size: .5em;
  --blur: 30px;
  --bg: #080312;
  --color: #afffff;
  color: var(--color);
    /* use position: relative; so that BG is only for .btn */
  position: relative;
  isolation: isolate;
  display: inline-grid;
  place-content: center;
  padding: .5em 1.5em;
  font-size: 17px;
  border: 0;
  text-transform: uppercase;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, .6);
  clip-path: polygon(
            /* Top-left */
            0% var(--curve-size),

            var(--curve-size) 0,
            /* top-right */
            100% 0,
            100% calc(100% - var(--curve-size)),

            /* bottom-right 1 */
            calc(100% - var(--curve-size)) 100%,
            /* bottom-right 2 */
            0 100%);
  transition: color 250ms;
}

.btn::after,
.btn::before {
  content: '';
  position: absolute;
  inset: 0;
}

.btn::before {
  background: var(--border-color);
  background-size: 300% 300%;
  animation: move-bg7234 5s ease infinite;
  z-index: -2;
}

@keyframes move-bg7234 {
  0% {
    background-position: 31% 0%
  }

  50% {
    background-position: 70% 100%
  }

  100% {
    background-position: 31% 0%
  }
}

.btn::after {
  background: var(--bg);
  z-index: -1;
  clip-path: polygon(
            /* Top-left */
            var(--border-width) 
            calc(var(--curve-size) + var(--border-width) * .5),

            calc(var(--curve-size) + var(--border-width) * .5) var(--border-width),

            /* top-right */
            calc(100% - var(--border-width)) 
            var(--border-width),

            calc(100% - var(--border-width)) 
            calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),

            /* bottom-right 1 */
            calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) calc(100% - var(--border-width)),
            /* bottom-right 2 */
            var(--border-width) calc(100% - var(--border-width)));
  transition: clip-path 500ms;
}

.btn:where(:hover, :focus)::after {
  clip-path: polygon(
                /* Top-left */
                calc(100% - var(--border-width)) 

                calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),
    
                calc(100% - var(--border-width))

                var(--border-width),
    
                /* top-right */
                calc(100% - var(--border-width))

                 var(--border-width),
    
                calc(100% - var(--border-width)) 

                calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),
    
                /* bottom-right 1 */
                calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) 
                calc(100% - var(--border-width)),

                /* bottom-right 2 */
                calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
                calc(100% - var(--border-width)));
  transition: 200ms;
}

.btn:where(:hover, :focus) {
  color: #fff;
}

            #QR-output {
                margin-top: 40px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="input-group">
            <input id="user-input" type="text" name="text" autocomplete="off" class="input" />
            <label class="user-label">Enter text</label>
        </div>

        <div id="btn">
        <button class="btn">Button</button>
        </div>

        <div id="QR-output"></div>

        <script>
            document.getElementById("btn").addEventListener("click", function () {
                const QRElement = document.getElementById("QR-output");
                const userInput = document.getElementById("user-input").value;
                QRElement.innerHTML = "";
                new QRCode(QRElement, userInput);
            });
        </script>
    </body>
</html>
