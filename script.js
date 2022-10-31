var array =[
    {
        id : '1',
        name : "jack",
        numeroCIN : "522112141521",
        adresse : "canada"
    },
    {
        id : '2',
        name : "mourad",
        numeroCIN : "451515484851",
        adresse : "suisse"
    },
    {
        id : '3',
        name : "chams",
        numeroCIN : "4548481212485",
        adresse : "madagascar"
    },
    {
        id : '4',
        name : "eric",
        numeroCIN : "4541213683313",
        adresse : "Inde"
    },
    {
        id : '5',
        name : "jean",
        numeroCIN : "7821633554512",
        adresse : "france"
    },
    {
        id : '6',
        name : "Eren",
        numeroCIN : "48451231313212",
        adresse : "angleterre"
    },
]

function showtable(curarray){
    document.getElementById("mytable").innerHTML = `
        <tr class = "bg-primary text-white fw-bold">
            <td>ID</td>
            <td>nom</td>
            <td>numeroCIN</td>
            <td>adresse</td>
        </tr>
     `;

     if(curarray == ""){
        document.getElementById("error").innerHTML = `<span class ="text-danger>pas trouvé!</span>`; 
     }
     else{
        document.getElementById("error").innerHTML = "";
        for(var  i = 0; i < curarray.length; i++){
            document.getElementById("mytable").innerHTML += `
                <tr>
                    <td>${curarray[i].id}</td>
                    <td>${curarray[i].name}</td>
                    <td>${curarray[i].numeroCIN}</td>
                    <td>${curarray[i].adresse}</td>
                </tr>
            `;

        }
     }
}
showtable(array);

//
var newarray = [];

//
document.getElementById("search").addEventListener("keyup",function(){
    var search =this.value.toLowerCase();
    newarray = array.filter(function(val){
        if(val.id.includes(search) || val.name.includes(search) || val.numeroCIN.includes(search) || val.adresse.includes(search)){
            var newobj = {id : val.id , name : val.name , numeroCIN : val.numeroCIN , adresse: val.adresse};
            return newobj;

        }
    })
    showtable(newarray);

})
