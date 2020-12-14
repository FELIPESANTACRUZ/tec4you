import React, {useState, useEffect} from 'react';
import '../../pages/Contatos/style.css'

const Solicitacoes = () =>{


    const [alert, setAlert] = useState (false);
    const [solicitacoes, setSolicitacoes] = useState([]);
    const [render, setRender] = useState(false);
    const [peca , setpeca] = useState(false);

    useEffect(async () => {
        const url = "http://localhost/PHP/backend%20tec4you/backend/indexPosts.php";
        const response = await fetch(url);
        setSolicitacoes(await response.json());
    }, [render])



    async function registerSolic(event){
        event.preventDefault();
        let formData = new FormData(event.target);

        const url = "http://localhost/PHP/backend%20tec4you/backend/registerPosts.php";

        fetch(url, {
            method: "POST",
            body: formData
        }).then((response) => response.json()).then((dados) => {
            setRender(!render);
            setpeca(dados);
            setTimeout(() => {
                setSolicitacoes(false);
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

            <form onSubmit={registerSolic}>
                <div className="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" className="form-control"  name="nome" id="nome" placeholder="Nome" />
                </div>
                <div className="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" className="form-control"  name="email" id="Email" placeholder="email" />
                </div>
                <div className="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" className="form-control"  name="marca" id="marca" placeholder="marca" />
                </div>
                <div className="form-group">
                    <label for="marca">Modelo:</label>
                    <input type="text" className="form-control"  name="modelo" id="modelo" placeholder="modelo" />
                </div>
                <div className="form-group">
                    <label for="peca">Peca:</label>
                    <input type="text" className="form-control"  name="peca" id="peca" placeholder="peca" />
                </div>
                <button className="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>

        </section>


        { peca && <div className="alert alert-success mx-auto mt-4 w-75" role="alert">
           solicitação efetuada com sucesso 
        </div>

        }

            <h2>Solicitacoes</h2>
            
            <section className="comen">
                {
                    solicitacoes.map((element) => {
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
export default Solicitacoes;
