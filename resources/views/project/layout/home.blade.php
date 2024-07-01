
<style>
      
        .form-container {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-sizing: border-box;
            margin-bottom: o.2em;
        }

        input:focus {
            border-color: #6200ea;
            box-shadow: 0 0 5px rgba(98, 0, 234, 0.3);
        }

        label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #aaa;
            transition: top 0.3s, left 0.3s, color 0.3s, transform 0.3s;
            background-color: #fff;
            padding: 0 5px;
            pointer-events: none;
        }

        input:focus + label,
        input:valid + label {
            top: -10px;
            left: 10px;
            color: #6200ea;
            background-color: #fff;
            padding: 0 5px;
            transform: translateY(-50%);
        }

        .error-message {
            color: red;
            font-size: 12px;
            position: absolute;
            bottom: -20px;
            left: 0;
        }

        .button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #6200ea;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        button:hover {
            background-color: #5300c9;
            box-shadow: 0 4px 8px rgba(83, 0, 201, 0.3);
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            input {
                padding: 8px;
            }

            button {
                padding: 8px;
                font-size: 14px;
            }
        }

</style>





  <div class="form-container">
        <h2>{{__('nav.join community')}}</h2>
        <form action="/checkStudent" method="post">
        @csrf
        @method('get')
            <div class="input-container">
                <input type="text" id="name" name="Kankor_id" placeholder="{{__('nav.kankor id')}}">
                <label for="name">{{__('nav.kankor id')}}</label>
                <span class="error-message">@error('Kankor_id') {{ $message }} @enderror</span>
            </div>
            <input type="submit" value="submit" class="button">
        </form>
    </div>

</section>

<!-- News section start -->




    

  