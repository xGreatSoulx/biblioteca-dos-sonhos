package projeto.bibliotecadossonhos.controller;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class LivroController {

    @GetMapping(path = "/api/check")
    public String check() {
        return "online!";
    }
    
}
