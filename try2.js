var objpepople =[
{
    username:"menna",
    password:"Menna22#",
    age:19
},
{
    username:"shahd",
    password:"Shahd22#",
    age:20
},
{
    username:"ali",
    password:"Alid22#",
    age:22
},
]

function getinfo(){
    var username = Document.getelementbyid("username").value
    var password = Document.getelementbyid("password").value
    var age = Document.getelementbyid("age").value

    for(i= 0;i<objpepople.length;i++)
    {
        if(username == objpepople[i].username && password == objpepople[i].password && age >15)
        {
            console.log(username +" is logged in !")
            return
        }
    }
    console.log("incorrect username or password")
}
