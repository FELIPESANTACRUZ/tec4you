import React, {useState, useEffect} from 'react';
import '../../pages/Contatos/style.css'

const Contatos = () =>{


    const [alert, setAlert] = useState (false);
    const [comentarios, setComentarios] = useState([]);
    const [render, setRender] = useState(false);
    const [msg , setMsg] = useState(false);

    useEffect(async () => {
        const url = "http://localhost/PHP/backend%20tec4you/backend/indexPosts.php";
        const response = await fetch(url);
        setComentarios(await response.json());
    }, [render])



    async function registerComent(event){
        event.preventDefault();
        let formData = new FormData(event.target);

        const url = "http://localhost/PHP/backend%20tec4you/backend/registerPosts.php";

        fetch(url, {
            method: "POST",
            body: formData
        }).then((response) => response.json()).then((dados) => {
            setRender(!render);
            setMsg(dados);
            setTimeout(() => {
                setMsg(false);
            }, 2000);
        });
    }


    return (
    <div className="container mt-5">
        <header>
            <h2 className="text-info">Solicite sua peça</h2>
        </header>
        <hr />
       

        
        <section className="formulario">

            <form onSubmit={registerComent}>
                <div className="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" className="form-control"  name="nome" id="exampleFormControlInput1" placeholder="Seu nome" />
                </div>
                <div className="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem:</label>
                    <textarea className="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button className="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>

        </section>


        { msg && <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
           solicitação efetuada com sucesso 
        </div>

        }

            <h2>Solicitacoes</h2>
            
            <section className="comen">
                {
                    comentarios.map((element) => {
                        return (

                            <div key={element.comentario_id} className="card w-50 mx-auto mt-3">
                                <div className="card-header">
                                   Nome: {element.nome}
                                </div>
                                <div className="card-body">
                                    Mensagem: {element.msg}
                                </div>
                            </div>
                        )
                    }).reverse()
                }

                
            </section>
    </div>
    );
}
export default Contatos;
