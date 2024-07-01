function info(i) {
    let profile = ["asset/./assets/image/file.jpg", "asset/./assets/image/team1.jpg", "asset/./assets/image/eh.jpg", "asset/./assets/image/sharif.jpg", "asset/./assets/image/ab6.jpg"];
    let name = ["Sanaullah-Hussam", "Mohammad Arif Dawoodi", "Ehsanullah-Hassan", "Mohammad sharif Bina", "AbdulQahar-Atif"];
    let statues = ["Fron-End-Developer", "Back-End-Developer", "Fron-End-Developer", "Back-End-Developer", "Database-Developer"];
    let description = [

        "khkdshsn dolor sit amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus nostrum accusamus consequuntur quaerat dolores pariat, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus nostrum accusamus consequuntur quaerat dolores pariatur?",

        "hdkhe dss sit amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus nostrum accusamus consequuntur quaerat dolores  sit amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati ",

        "lshdkdfhla sit amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus n amet consectetur, adipisicing elit. Nisi alias magnam commodi ear dkfkdl  asdflas  l lasjdladsdd djklf;asdk;s;fdslf fdk fkdsj f?",

        "jsladjkfkssit amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus n amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque",

        "djkhjlsadfhkjsar sit amet consectetur,  amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus n amet consectetur, adipisicing elit. Nisi alias magnam commodi ea atque laudantium eius obcaecati sed vero laboriosam quibusdam, qui tenetur natus n amet consectetur, adipisicing elit. Nisi alias"
    ];

    document.getElementById("pic").src = profile[i];
    document.getElementById("name").innerHTML = name[i];
    document.getElementById("skill").innerHTML = statues[i];
    document.getElementById("info").innerHTML = description[i];
}