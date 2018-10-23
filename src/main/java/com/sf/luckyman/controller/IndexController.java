package com.sf.luckyman.controller;

import com.google.code.kaptcha.Producer;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import javax.imageio.ImageIO;
import javax.servlet.ServletOutputStream;
import javax.servlet.http.HttpServletResponse;
import java.awt.image.BufferedImage;
import java.io.IOException;

/**
 * index controller
 * @author choleece
 * @date 2018/10/23
 */
@Controller
@RequestMapping("/luckyman")
public class IndexController {

    @Autowired
    private Producer captchaProducer;

    @GetMapping("/captcha")
    public void getCaptcha(HttpServletResponse response) throws IOException {
        response.setHeader("Cache-Control", "no-store, no-cache");
        response.setContentType("image/jpeg");

        // 生成文字验证码
        String text = captchaProducer.createText();
        // 生成验证码图片
        BufferedImage image = captchaProducer.createImage(text);
        // 保存在session里

        ServletOutputStream outputStream = response.getOutputStream();
        ImageIO.write(image, "jpg", outputStream);
    }

    /**
     * 跳转到签到页面
     * @return
     */
    @GetMapping("/sign.html")
    public String sign() {
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
