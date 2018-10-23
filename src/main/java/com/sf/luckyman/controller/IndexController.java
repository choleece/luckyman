package com.sf.luckyman.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

/**
 * index controller
 * @author choleece
 * @date 2018/10/23
 */
@Controller
@RequestMapping("/luckyman")
public class IndexController {

    /**
     * 跳转到签到页面
     * @return
     */
    @GetMapping("/sign.html")
    public String index() {
        return "/sign";
    }


    /**
     * 跳转到抽奖页面
     * @return
     */
    @GetMapping("/lucky.html")
    public String luckMan() {
        return "/luckyman";
    }

}
